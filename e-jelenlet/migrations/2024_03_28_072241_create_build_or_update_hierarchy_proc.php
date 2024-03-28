<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE DEFINER=`ej2_showtime_p`@`localhost` PROCEDURE `build_or_update_hierarchy`(actual_date date)
begin
    declare done int default false;

    declare a, b, c, d int;

    declare cursor_build_hierarchy cursor for (
        select
            parent.core_legal_entities_id as parent_core_legal_entities_id,
            updater.child_core_legal_entities_id,
            updater.core_firms_id,
            updater.id
        from
            core_hierarchy_updater as updater
        inner join (
            select child_core_legal_entities_id, max(date(from_date)) as from_date
            from core_hierarchy_updater
            where date(from_date) <= actual_date
            group by child_core_legal_entities_id
        ) as max using (child_core_legal_entities_id, from_date)
        inner join view_legal_entities_query as parent on parent.payroll_software_id = updater.parent_payroll_software_id and parent.core_firms_id = updater.core_firms_id
        inner join view_legal_entities_query as child on child.core_legal_entities_id = updater.child_core_legal_entities_id and parent.core_firms_id = updater.core_firms_id
        where updater.updated_at is null
        and (parent.end_date = '' or parent.end_date > actual_date)
        and (child.end_date = '' or child.end_date > actual_date)
    );

    declare continue handler for not found set done = true;

    open cursor_build_hierarchy;
        read_loop: loop
            fetch cursor_build_hierarchy into a, b, c, d;

            if done then
                leave read_loop;
            end if;

            if a != b then

                /* Kapcsolat ellenőrzése a hierarchiában, ha nincs még ilyen.. */
                if not exists (
                    select parent_core_legal_entities_id, child_core_legal_entities_id, core_firms_id
                    from core_hierarchy
                    where parent_core_legal_entities_id = a and child_core_legal_entities_id = b and core_firms_id = c
                ) then

                    /* Régi vezető beszerzése */
                    set @parent = (
                        select parent_core_legal_entities_id
                        from core_hierarchy
                        where child_core_legal_entities_id = b and core_firms_id = c
                    );

                    /* Ha létezik ilyen */
                    if @parent then

                        /* Frissitjuk a meglévő kapcsolatot */
                        update core_hierarchy
                        set parent_core_legal_entities_id = a
                        where parent_core_legal_entities_id = @parent and child_core_legal_entities_id = b and core_firms_id = c;

                        /* Frissités történt */
                        insert into core_hierarchy_updater_logs(new_parent_id, old_parent_id, child_id, firm_id, result, created_at, updated_at)
                        values (a, @parent, b, c, 2, current_timestamp(), null);

                        /* Ha a régi vezető még tagja a hierarchiának */
                        if exists (
                            select id
                            from core_hierarchy
                            where parent_core_legal_entities_id = @parent or child_core_legal_entities_id = @parent
                            limit 1
                        ) then

                            /* Ha már nem vezető */
                            if not exists (
                                select id
                                from core_hierarchy
                                where parent_core_legal_entities_id = @parent and core_firms_id = c
                                limit 1
                            ) then

                                /* Töröljük a régi vezetőt a vezetők csoportokból */
                                delete from core_permission_groups_core_legal_entities_rel
                                where core_legal_entities_id = @parent and core_permission_groups_id in (
                                    select id
                                    from core_permission_groups
                                    where group_type = 4
                                );

                            end if;
                        else

                            /* Töröljük a régi vezetőt a csoportokból */
                            delete from core_permission_groups_core_legal_entities_rel
                            where core_legal_entities_id = @parent;

                            /* Beléphet tulajdonság beállitása */
                            update core_legal_entities_attributes_values
                            set value = 0
                            where core_legal_entities_attributes_id = 6 and core_legal_entities_id = @parent;

                        end if;

                        /* Ha még nincs nincs benne a vezetők csoportokban */
                        if not exists (
                            select id
                            from core_permission_groups_core_legal_entities_rel
                            where core_permission_groups_id in (
                                select id
                                from core_permission_groups
                                where group_type = 4 and core_firms_id = c
                            )
                            and core_legal_entities_id = a
                        ) then

                            /* Hozzáadjuk a vezetőt a megfelelő csoportokhoz */
                            insert into core_permission_groups_core_legal_entities_rel (core_permission_groups_id, core_legal_entities_id)
                            select id, a
                            from core_permission_groups
                            where group_type = 4 and core_firms_id = c;

                        end if;

                        /* Ha még nincs nincs benne a dolgozók csoportokban */
                        if not exists (
                            select id
                            from core_permission_groups_core_legal_entities_rel
                            where core_permission_groups_id in (
                                select id
                                from core_permission_groups
                                where group_type = 3 and core_firms_id = c
                            )
                            and core_legal_entities_id = a
                        ) then

                            /* Hozzáadjuk a vezetőt a megfelelő csoportokhoz */
                            insert into core_permission_groups_core_legal_entities_rel (core_permission_groups_id, core_legal_entities_id)
                            select id, a
                            from core_permission_groups
                            where group_type = 3 and core_firms_id = c;

                        end if;

                        /* Beléphet tulajdonság beállitása vezető és dolgozó részére */
                        update core_legal_entities_attributes_values
                        set value = 1
                        where core_legal_entities_attributes_id = 6 and core_legal_entities_id = a;

                    else

                        /* Beszúrjuk az új kapcsolatot */
                        insert into core_hierarchy (parent_core_legal_entities_id, child_core_legal_entities_id, core_firms_id)
                        values (a, b, c);

                        /* Beszúrás történt */
                        insert into core_hierarchy_updater_logs(new_parent_id, old_parent_id, child_id, firm_id, result, created_at, updated_at)
                        values (a, null, b, c, 1, current_timestamp(), null);

                        /* Ha még nincs nincs benne a vezetők csoportokban */
                        if not exists (
                            select id
                            from core_permission_groups_core_legal_entities_rel
                            where core_permission_groups_id in (
                                select id
                                from core_permission_groups
                                where group_type = 4 and core_firms_id = c
                            )
                            and core_legal_entities_id = a
                        ) then

                            /* Hozzáadjuk a vezetőt a megfelelő csoportokhoz */
                            insert into core_permission_groups_core_legal_entities_rel (core_permission_groups_id, core_legal_entities_id)
                            select id, a
                            from core_permission_groups
                            where group_type = 4 and core_firms_id = c;

                        end if;

                        /* Ha a beosztott még nincs csoporthoz hozzárendelve */
                        if not exists (
                            select core_permission_groups_core_legal_entities_rel.id
                            from core_permission_groups_core_legal_entities_rel
                            left join core_permission_groups on core_permission_groups.id = core_permission_groups_core_legal_entities_rel.core_permission_groups_id
                            where core_permission_groups.group_type = 3 and core_legal_entities_id = b and core_firms_id = c
                        ) then

                            /* Hozzáadjuk a dolgozót a megfelelő csoportokhoz */
                            insert into core_permission_groups_core_legal_entities_rel (core_permission_groups_id, core_legal_entities_id)
                            select id, b
                            from core_permission_groups
                            where group_type = 3 and core_firms_id = c;

                        end if;

                        /* Beléphet tulajdonság beállitása vezető és dolgozó részére */
                        update core_legal_entities_attributes_values
                        set value = 1
                        where core_legal_entities_attributes_id = 6 and core_legal_entities_id in (a, b);

                    end if;

                    /* Státusz update */
                    update core_hierarchy_updater
                    set updated_at = current_timestamp()
                    where id = d;                   

                end if;
            end if;

        end loop;
    close cursor_build_hierarchy;

end");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS build_or_update_hierarchy");
    }
};
