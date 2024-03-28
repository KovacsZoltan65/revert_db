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
        DB::unprepared("CREATE DEFINER=`ej2_showtime_p`@`localhost` PROCEDURE `get_legal_entities_data_for_scheduleplanner`(legalentities TEXT)
BEGIN
	DECLARE temp_legal_entities_ids VARCHAR(40);
    
	SET temp_legal_entities_ids := (MD5(RAND()));
    
	DROP TEMPORARY TABLE IF EXISTS temp_legal_entities_ids;
    
	CREATE TEMPORARY TABLE temp_legal_entities_ids (core_legal_entities_id INT PRIMARY KEY);
    
    BEGIN
		SET @value := legalentities;

		WHILE (LOCATE('|', @value) > 0) DO
			SET @core_legal_entities_id = SUBSTRING(@value, 1, LOCATE('|', @value) - 1);
			SET @value = SUBSTRING(@value, LOCATE('|', @value) + 1);
			INSERT INTO temp_legal_entities_ids VALUE(CONVERT(@core_legal_entities_id, UNSIGNED INTEGER));
		END WHILE;
	END;
    
    SELECT
		*
	FROM
		temp_legal_entities_ids AS a
        JOIN (
			SELECT
				core_legal_entities_id,
				group_concat(IF(core_legal_entities_attributes_id = 1, VALUE, '') SEPARATOR '') AS legal_entity_name,
				group_concat(IF(core_legal_entities_attributes_id = 2, VALUE, '') SEPARATOR '') AS core_firms_id,
				group_concat(IF(core_legal_entities_attributes_id = 3, VALUE, '') SEPARATOR '') AS core_persons_id,
				group_concat(IF(core_legal_entities_attributes_id = 7, VALUE, '') SEPARATOR '') AS start_date,
				group_concat(IF(core_legal_entities_attributes_id = 8, VALUE, '') SEPARATOR '') AS end_date,
				group_concat(IF(core_legal_entities_attributes_id = 9, VALUE, '') SEPARATOR '') AS last_export_date,
				group_concat(IF(core_legal_entities_attributes_id = 10, VALUE, '') SEPARATOR '') AS core_establishments_id,
				group_concat(IF(core_legal_entities_attributes_id = 11, VALUE, '') SEPARATOR '') AS core_departments_id,
				group_concat(IF(core_legal_entities_attributes_id = 14, VALUE, '') SEPARATOR '') AS last_workday_date,
				group_concat(IF(core_legal_entities_attributes_id = 15, VALUE, '') SEPARATOR '') AS payroll_software_id,
				group_concat(IF(core_legal_entities_attributes_id = 16, VALUE, '') SEPARATOR '') AS outsourced_admin,
				group_concat(IF(core_legal_entities_attributes_id = 18, VALUE, '') SEPARATOR '') AS virtual_legal_entity
			FROM
				core_legal_entities_attributes_values
			WHERE
				core_legal_entities_attributes_id IN (1, 2, 3, 7, 8, 9, 10, 11, 14, 15, 16, 18)
			GROUP BY
				core_legal_entities_id
        ) AS b on a.core_legal_entities_id = b.core_legal_entities_id
        JOIN (
			SELECT
				core_persons_id,
				group_concat(IF(core_persons_attributes_id = 2, VALUE, '') SEPARATOR '') AS person_email,
				group_concat(IF(core_persons_attributes_id = 4, VALUE, '') SEPARATOR '') AS person_name
			FROM
				core_persons_attributes_values
			WHERE
				core_persons_attributes_id IN (2, 4)
			GROUP BY
				core_persons_id
		) AS c ON b.core_persons_id = c.core_persons_id
    ORDER BY
		c.person_name;
    
    DROP TEMPORARY TABLE IF EXISTS temp_legal_entities_ids;
END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS get_legal_entities_data_for_scheduleplanner");
    }
};
