<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoreLegalEntitiesSystemAttributesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_legal_entities_system_attributes')->truncate();
        
        \DB::table('core_legal_entities_system_attributes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'developer_description' => 'A jogviszony megnevezése.',
                'editable' => 1,
                'show_in_legal_entity_selector' => 1,
                'model_name' => '',
            ),
            1 => 
            array (
                'id' => 2,
                'developer_description' => 'A jogviszony cége.',
                'editable' => 0,
                'show_in_legal_entity_selector' => 0,
                'model_name' => 'CoreFirms',
            ),
            2 => 
            array (
                'id' => 3,
                'developer_description' => 'A jogviszony ehhez a személyhez tartozik.',
                'editable' => 0,
                'show_in_legal_entity_selector' => 0,
                'model_name' => '',
            ),
            3 => 
            array (
                'id' => 4,
                'developer_description' => 'A jogviszony alapértelmezett nyelvi beállítása.',
                'editable' => 1,
                'show_in_legal_entity_selector' => 0,
                'model_name' => 'CoreLocalization',
            ),
            4 => 
            array (
                'id' => 5,
                'developer_description' => 'A jogviszony aktív/inaktív státusza.',
                'editable' => 1,
                'show_in_legal_entity_selector' => 0,
                'model_name' => '',
            ),
            5 => 
            array (
                'id' => 6,
                'developer_description' => 'A jogviszony beléphet-e a rendszerbe.',
                'editable' => 1,
                'show_in_legal_entity_selector' => 0,
                'model_name' => '',
            ),
            6 => 
            array (
                'id' => 7,
                'developer_description' => 'A jogviszony kezdete.',
                'editable' => 0,
                'show_in_legal_entity_selector' => 0,
                'model_name' => '',
            ),
            7 => 
            array (
                'id' => 8,
                'developer_description' => 'A jogviszony vége.',
                'editable' => 1,
                'show_in_legal_entity_selector' => 0,
                'model_name' => '',
            ),
            8 => 
            array (
                'id' => 9,
                'developer_description' => 'Utolsó export dátuma',
                'editable' => 0,
                'show_in_legal_entity_selector' => 0,
                'model_name' => '',
            ),
            9 => 
            array (
                'id' => 10,
                'developer_description' => 'A jogviszony ehhez a telephelyhez tartozik.',
                'editable' => 0,
                'show_in_legal_entity_selector' => 1,
                'model_name' => 'CoreEstablishments',
            ),
            10 => 
            array (
                'id' => 11,
                'developer_description' => 'A jogviszony ehhez a szervezeti egységhez tartozik.',
                'editable' => 0,
                'show_in_legal_entity_selector' => 1,
                'model_name' => 'CoreDepartments',
            ),
            11 => 
            array (
                'id' => 12,
                'developer_description' => 'A jogviszony ehhez a költséghelyhez tartozik.',
                'editable' => 0,
                'show_in_legal_entity_selector' => 1,
                'model_name' => 'CoreCostCenters',
            ),
            12 => 
            array (
                'id' => 13,
                'developer_description' => 'Hierarchia szerkesztésének joga.',
                'editable' => 1,
                'show_in_legal_entity_selector' => 0,
                'model_name' => '',
            ),
            13 => 
            array (
                'id' => 14,
                'developer_description' => 'A jogviszony utolsó munkában töltött napja.',
                'editable' => 1,
                'show_in_legal_entity_selector' => 0,
                'model_name' => '',
            ),
            14 => 
            array (
                'id' => 15,
                'developer_description' => 'Jogviszony azonosítója a számfejtő szoftverben.',
                'editable' => 0,
                'show_in_legal_entity_selector' => 0,
                'model_name' => '',
            ),
            15 => 
            array (
                'id' => 16,
                'developer_description' => 'Jogviszony külsős adminisztrátor-e.',
                'editable' => 1,
                'show_in_legal_entity_selector' => 0,
                'model_name' => '',
            ),
            16 => 
            array (
                'id' => 17,
                'developer_description' => 'A jogviszony egyedi azonosítója',
                'editable' => 1,
                'show_in_legal_entity_selector' => 1,
                'model_name' => '',
            ),
            17 => 
            array (
                'id' => 18,
                'developer_description' => 'A jogviszony virtuális papik-e.',
                'editable' => 0,
                'show_in_legal_entity_selector' => 0,
                'model_name' => '',
            ),
            18 => 
            array (
                'id' => 19,
                'developer_description' => 'A jogviszony munkarendje',
                'editable' => 0,
                'show_in_legal_entity_selector' => 1,
                'model_name' => 'AttendanceWorkplans',
            ),
            19 => 
            array (
                'id' => 20,
                'developer_description' => 'Teljes hierarchia szerkesztésének joga.',
                'editable' => 1,
                'show_in_legal_entity_selector' => 0,
                'model_name' => '',
            ),
        ));

        
    }
}