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
        DB::unprepared("CREATE DEFINER=`ej2_showtime_p`@`localhost` PROCEDURE `core_legal_entities_datatable`( firm_id int, legalentities text, persons text, parameter_21 int)
begin
select
    core_legal_entities.core_legal_entities_id as id,
    trim(core_persons.core_persons_name) as core_persons_name,
    trim(core_legal_entities.core_legal_entities_name) as core_legal_entities_name,
    trim(establishment_name.name) as establishment_name,
    trim(department_name.name) as department_name,
    trim(cost_center_name.name) as cost_center_name,
    trim(profit_center_name.name) as profit_center_name,
    trim(workplan_name.name) as workplan_name,
    trim(worktimelimit_name.name) as worktimelimit_name,
    core_legal_entities.core_legal_entities_id,
    core_legal_entities.core_persons_id,
    core_legal_entities.core_firm_id,
    core_legal_entities.start_date,
    core_legal_entities.end_date,
    core_legal_entities.last_day_at_work,
    core_legal_entities.last_export_date,
    core_legal_entities.payroll_id,
    core_legal_entities.specific_unique_id,
    core_persons.tax_id as tax_id,
    case
        when core_legal_entities.end_date = '' or (core_legal_entities.end_date != '' and core_legal_entities.end_date >= date_sub(current_date, interval dayofmonth(current_date)-1 day)) then 1
        else 0
    end as state,
    0 as selected
from (
    select
        core_legal_entities_id,
        group_concat(if(core_legal_entities_attributes_id = 1, value, '') separator '') as core_legal_entities_name,
        group_concat(if(core_legal_entities_attributes_id = 2, value, '') separator '') as core_firm_id,
        group_concat(if(core_legal_entities_attributes_id = 3, value, '') separator '') as core_persons_id,
        group_concat(if(core_legal_entities_attributes_id = 7, value, '') separator '') as start_date,
        group_concat(if(core_legal_entities_attributes_id = 8, value, '') separator '') as end_date,
        group_concat(if(core_legal_entities_attributes_id = 9, value, '') separator '') as last_export_date,
        group_concat(if(core_legal_entities_attributes_id = 10, value, '') separator '') as establishment_id,
        group_concat(if(core_legal_entities_attributes_id = 11, value, '') separator '') as department_id,
        group_concat(if(core_legal_entities_attributes_id = 12, value, '') separator '') as cost_center_id,
        group_concat(if(core_legal_entities_attributes_id = 14, value, '') separator '') as last_day_at_work,
        group_concat(if(core_legal_entities_attributes_id = 15, value, '') separator '') as payroll_id,
        group_concat(if(core_legal_entities_attributes_id = 17, value, '') separator '') as specific_unique_id,
        group_concat(if(core_legal_entities_attributes_id = 16, value, '') separator '') as outsourced_admin,
        group_concat(if(core_legal_entities_attributes_id = 18, value, '') separator '') as virtual_legal_entity
    from
        core_legal_entities_attributes_values
    where
        core_legal_entities_attributes_id in (1, 2, 3, 7, 8, 9, 10, 11, 12, 14, 15, 16, 17, 18)
    group by
        core_legal_entities_id
) as core_legal_entities
inner join (
    select
        core_persons_id,
        group_concat(if(core_persons_attributes_id = 4, value, '') separator '') as core_persons_name,
        group_concat(if(core_persons_attributes_id = 9, value, '') separator '') as tax_id
    from			
        core_persons_attributes_values
    where
        core_persons_attributes_id in (4, 9)
    group by
        core_persons_id
) as core_persons on core_persons.core_persons_id = core_legal_entities.core_persons_id
left join core_establishments as establishment_name on establishment_name.id = core_legal_entities.establishment_id
left join core_departments as department_name on department_name.id = core_legal_entities.department_id
left join core_cost_centers as cost_center_name on cost_center_name.id = core_legal_entities.cost_center_id
left join core_legal_entities_profit_center_assignments as profit_center_id on profit_center_id.core_legal_entities_id = core_legal_entities.core_legal_entities_id and profit_center_id.start_date <= curdate() and profit_center_id.end_date is null
left join core_profit_centers as profit_center_name on profit_center_name.id = profit_center_id.core_profit_centers_id
left join attendance_workplans_core_legal_entities_rel as workplan_id on workplan_id.core_legal_entities_id = core_legal_entities.core_legal_entities_id and workplan_id.start_date <= curdate() and workplan_id.end_date >= curdate()
left join attendance_workplans as workplan_name on workplan_name.id = workplan_id.attendance_workplans_id
left join attendance_worktimelimit_assignments as worktimelimit_id on worktimelimit_id.core_legal_entities_id = core_legal_entities.core_legal_entities_id and worktimelimit_id.start_date <= curdate() and worktimelimit_id.end_date >= curdate()
left join attendance_worktimelimits as worktimelimit_name on worktimelimit_name.id = worktimelimit_id.attendance_worktimelimits_id
where
    (core_legal_entities.core_firm_id = firm_id or firm_id = -1)
    and core_legal_entities.outsourced_admin = 0
    and core_legal_entities.virtual_legal_entity = 0
    and (find_in_set(core_legal_entities.core_legal_entities_id, legalentities) or legalentities = '')
    and (find_in_set(core_persons.core_persons_id, persons) or persons = '')
    and
        case
            when parameter_21 = 6 then core_legal_entities.end_date = '' or core_legal_entities.end_date != ''
            when parameter_21 = 7 then core_legal_entities.end_date = ''
            when parameter_21 = 32 then core_legal_entities.end_date = '' or (core_legal_entities.end_date != '' and core_legal_entities.end_date >= date_sub(current_date, interval dayofmonth(current_date)-1 day))
        end
group by
    core_legal_entities.core_legal_entities_id,
    profit_center_name.name,
    workplan_name.name,
    worktimelimit_name.name
order by
    core_persons.core_persons_name;
            end");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS core_legal_entities_datatable");
    }
};
