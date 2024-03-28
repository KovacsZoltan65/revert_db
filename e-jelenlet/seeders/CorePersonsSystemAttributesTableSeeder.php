<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CorePersonsSystemAttributesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_persons_system_attributes')->truncate();
        
        \DB::table('core_persons_system_attributes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'developer_description' => 'A személy OHR kódja.',
                'editable' => 0,
                'show_in_legal_entity_selector' => 0,
                'model_name' => '',
            ),
            1 => 
            array (
                'id' => 2,
                'developer_description' => 'A személy e-mail címe.',
                'editable' => 1,
                'show_in_legal_entity_selector' => 0,
                'model_name' => '',
            ),
            2 => 
            array (
                'id' => 3,
                'developer_description' => 'A személy egyéb azonosítója.',
                'editable' => 0,
                'show_in_legal_entity_selector' => 0,
                'model_name' => '',
            ),
            3 => 
            array (
                'id' => 4,
                'developer_description' => 'A személy neve.',
                'editable' => 0,
                'show_in_legal_entity_selector' => 1,
                'model_name' => '',
            ),
            4 => 
            array (
                'id' => 5,
                'developer_description' => 'A személy jelszava.',
                'editable' => 1,
                'show_in_legal_entity_selector' => 0,
                'model_name' => '',
            ),
            5 => 
            array (
                'id' => 6,
                'developer_description' => 'A személy aktív/inaktív státusza.',
                'editable' => 1,
                'show_in_legal_entity_selector' => 0,
                'model_name' => '',
            ),
            6 => 
            array (
                'id' => 7,
                'developer_description' => 'A személy alapértelmezett nyelvi beállítása.',
                'editable' => 1,
                'show_in_legal_entity_selector' => 0,
                'model_name' => '',
            ),
            7 => 
            array (
                'id' => 8,
                'developer_description' => 'Jelszófrissítés kényszerítése történt',
                'editable' => 1,
                'show_in_legal_entity_selector' => 0,
                'model_name' => '',
            ),
            8 => 
            array (
                'id' => 9,
                'developer_description' => 'Adó azonosító jel',
                'editable' => 0,
                'show_in_legal_entity_selector' => 0,
                'model_name' => '',
            ),
            9 => 
            array (
                'id' => 10,
                'developer_description' => 'Eddig az időpontig nem léphet be',
                'editable' => 1,
                'show_in_legal_entity_selector' => 0,
                'model_name' => '',
            ),
        ));

        
    }
}