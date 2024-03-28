<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoreLegalEntitiesAttributesLabelsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_legal_entities_attributes_labels')->truncate();
        
        \DB::table('core_legal_entities_attributes_labels')->insert(array (
            0 => 
            array (
                'id' => 1,
                'core_legal_entities_attributes_id' => 1,
                'core_localization_id' => 1,
                'value' => 'Megnevezés',
            ),
            1 => 
            array (
                'id' => 2,
                'core_legal_entities_attributes_id' => 2,
                'core_localization_id' => 1,
                'value' => 'Cég',
            ),
            2 => 
            array (
                'id' => 3,
                'core_legal_entities_attributes_id' => 3,
                'core_localization_id' => 1,
                'value' => 'Személy',
            ),
            3 => 
            array (
                'id' => 4,
                'core_legal_entities_attributes_id' => 4,
                'core_localization_id' => 1,
                'value' => 'Nyelvi beállítás',
            ),
            4 => 
            array (
                'id' => 5,
                'core_legal_entities_attributes_id' => 5,
                'core_localization_id' => 1,
                'value' => 'Aktív státusz',
            ),
            5 => 
            array (
                'id' => 6,
                'core_legal_entities_attributes_id' => 6,
                'core_localization_id' => 1,
                'value' => 'Beléphet',
            ),
            6 => 
            array (
                'id' => 7,
                'core_legal_entities_attributes_id' => 7,
                'core_localization_id' => 1,
                'value' => 'Jogviszony kezdete',
            ),
            7 => 
            array (
                'id' => 8,
                'core_legal_entities_attributes_id' => 8,
                'core_localization_id' => 1,
                'value' => 'Jogviszony vége',
            ),
            8 => 
            array (
                'id' => 9,
                'core_legal_entities_attributes_id' => 1,
                'core_localization_id' => 2,
                'value' => 'Name',
            ),
            9 => 
            array (
                'id' => 10,
                'core_legal_entities_attributes_id' => 2,
                'core_localization_id' => 2,
                'value' => 'Firm',
            ),
            10 => 
            array (
                'id' => 11,
                'core_legal_entities_attributes_id' => 3,
                'core_localization_id' => 2,
                'value' => 'Person',
            ),
            11 => 
            array (
                'id' => 12,
                'core_legal_entities_attributes_id' => 4,
                'core_localization_id' => 2,
                'value' => 'Language Setting',
            ),
            12 => 
            array (
                'id' => 13,
                'core_legal_entities_attributes_id' => 5,
                'core_localization_id' => 2,
                'value' => 'Status',
            ),
            13 => 
            array (
                'id' => 14,
                'core_legal_entities_attributes_id' => 6,
                'core_localization_id' => 2,
                'value' => 'May login',
            ),
            14 => 
            array (
                'id' => 15,
                'core_legal_entities_attributes_id' => 7,
                'core_localization_id' => 2,
                'value' => 'Relationships start',
            ),
            15 => 
            array (
                'id' => 16,
                'core_legal_entities_attributes_id' => 8,
                'core_localization_id' => 2,
                'value' => 'End of relationship',
            ),
            16 => 
            array (
                'id' => 17,
                'core_legal_entities_attributes_id' => 9,
                'core_localization_id' => 1,
                'value' => 'Utolsó export dátuma',
            ),
            17 => 
            array (
                'id' => 18,
                'core_legal_entities_attributes_id' => 9,
                'core_localization_id' => 2,
                'value' => 'Last export date',
            ),
            18 => 
            array (
                'id' => 19,
                'core_legal_entities_attributes_id' => 10,
                'core_localization_id' => 1,
                'value' => 'Telephely',
            ),
            19 => 
            array (
                'id' => 20,
                'core_legal_entities_attributes_id' => 11,
                'core_localization_id' => 1,
                'value' => 'Szervezeti egység',
            ),
            20 => 
            array (
                'id' => 21,
                'core_legal_entities_attributes_id' => 10,
                'core_localization_id' => 2,
                'value' => 'Establishment',
            ),
            21 => 
            array (
                'id' => 22,
                'core_legal_entities_attributes_id' => 11,
                'core_localization_id' => 2,
                'value' => 'Department',
            ),
            22 => 
            array (
                'id' => 23,
                'core_legal_entities_attributes_id' => 12,
                'core_localization_id' => 1,
                'value' => 'Költséghely',
            ),
            23 => 
            array (
                'id' => 24,
                'core_legal_entities_attributes_id' => 12,
                'core_localization_id' => 2,
                'value' => 'Cost center',
            ),
            24 => 
            array (
                'id' => 25,
                'core_legal_entities_attributes_id' => 13,
                'core_localization_id' => 1,
                'value' => 'Hierarchia szerkesztési jog',
            ),
            25 => 
            array (
                'id' => 26,
                'core_legal_entities_attributes_id' => 13,
                'core_localization_id' => 2,
                'value' => 'Rights to edit the hierarchy',
            ),
            26 => 
            array (
                'id' => 27,
                'core_legal_entities_attributes_id' => 14,
                'core_localization_id' => 1,
                'value' => 'Utolsó munkában töltött nap',
            ),
            27 => 
            array (
                'id' => 28,
                'core_legal_entities_attributes_id' => 15,
                'core_localization_id' => 1,
                'value' => 'Jogviszony azonosítója a számfejtő szoftverben',
            ),
            28 => 
            array (
                'id' => 29,
                'core_legal_entities_attributes_id' => 16,
                'core_localization_id' => 1,
                'value' => 'Jogviszony külsős adminisztrátor-e',
            ),
            29 => 
            array (
                'id' => 30,
                'core_legal_entities_attributes_id' => 14,
                'core_localization_id' => 2,
                'value' => 'Last day at work',
            ),
            30 => 
            array (
                'id' => 31,
                'core_legal_entities_attributes_id' => 15,
                'core_localization_id' => 2,
                'value' => 'Identification of the relationship payroll Software',
            ),
            31 => 
            array (
                'id' => 32,
                'core_legal_entities_attributes_id' => 16,
                'core_localization_id' => 2,
                'value' => 'Relationship to external administrator',
            ),
            32 => 
            array (
                'id' => 33,
                'core_legal_entities_attributes_id' => 17,
                'core_localization_id' => 1,
                'value' => 'Cégspecifikus egyedi azonosító',
            ),
            33 => 
            array (
                'id' => 34,
                'core_legal_entities_attributes_id' => 17,
                'core_localization_id' => 2,
                'value' => 'Firm specific unique identifier',
            ),
            34 => 
            array (
                'id' => 35,
                'core_legal_entities_attributes_id' => 18,
                'core_localization_id' => 1,
                'value' => 'A jogviszony virtuális papik-e.',
            ),
            35 => 
            array (
                'id' => 36,
                'core_legal_entities_attributes_id' => 18,
                'core_localization_id' => 2,
                'value' => 'Is virtual legal entity',
            ),
            36 => 
            array (
                'id' => 37,
                'core_legal_entities_attributes_id' => 19,
                'core_localization_id' => 1,
                'value' => 'Munkarend',
            ),
            37 => 
            array (
                'id' => 38,
                'core_legal_entities_attributes_id' => 19,
                'core_localization_id' => 2,
                'value' => 'Workplan',
            ),
            38 => 
            array (
                'id' => 39,
                'core_legal_entities_attributes_id' => 20,
                'core_localization_id' => 1,
                'value' => 'Teljes hierarchia szerkesztési jog',
            ),
            39 => 
            array (
                'id' => 40,
                'core_legal_entities_attributes_id' => 20,
                'core_localization_id' => 2,
                'value' => 'Rights to edit the full hierarchy',
            ),
        ));

        
    }
}