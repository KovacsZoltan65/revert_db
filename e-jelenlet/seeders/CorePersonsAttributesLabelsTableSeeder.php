<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CorePersonsAttributesLabelsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_persons_attributes_labels')->truncate();
        
        \DB::table('core_persons_attributes_labels')->insert(array (
            0 => 
            array (
                'id' => 1,
                'core_persons_attributes_id' => 1,
                'core_localization_id' => 1,
                'value' => 'OHR kód',
            ),
            1 => 
            array (
                'id' => 2,
                'core_persons_attributes_id' => 2,
                'core_localization_id' => 1,
                'value' => 'E-mail cím',
            ),
            2 => 
            array (
                'id' => 3,
                'core_persons_attributes_id' => 3,
                'core_localization_id' => 1,
                'value' => 'Egyéb azonosító',
            ),
            3 => 
            array (
                'id' => 4,
                'core_persons_attributes_id' => 4,
                'core_localization_id' => 1,
                'value' => 'Név',
            ),
            4 => 
            array (
                'id' => 5,
                'core_persons_attributes_id' => 5,
                'core_localization_id' => 1,
                'value' => 'Jelszó',
            ),
            5 => 
            array (
                'id' => 6,
                'core_persons_attributes_id' => 6,
                'core_localization_id' => 1,
                'value' => 'Aktív státusz',
            ),
            6 => 
            array (
                'id' => 7,
                'core_persons_attributes_id' => 7,
                'core_localization_id' => 1,
                'value' => 'Nyelvi beállítás',
            ),
            7 => 
            array (
                'id' => 8,
                'core_persons_attributes_id' => 1,
                'core_localization_id' => 2,
                'value' => 'OHR code',
            ),
            8 => 
            array (
                'id' => 9,
                'core_persons_attributes_id' => 2,
                'core_localization_id' => 2,
                'value' => 'E-mail address',
            ),
            9 => 
            array (
                'id' => 10,
                'core_persons_attributes_id' => 3,
                'core_localization_id' => 2,
                'value' => 'Other identification',
            ),
            10 => 
            array (
                'id' => 11,
                'core_persons_attributes_id' => 4,
                'core_localization_id' => 2,
                'value' => 'Name',
            ),
            11 => 
            array (
                'id' => 12,
                'core_persons_attributes_id' => 5,
                'core_localization_id' => 2,
                'value' => 'Password',
            ),
            12 => 
            array (
                'id' => 13,
                'core_persons_attributes_id' => 6,
                'core_localization_id' => 2,
                'value' => 'Status',
            ),
            13 => 
            array (
                'id' => 14,
                'core_persons_attributes_id' => 7,
                'core_localization_id' => 2,
                'value' => 'Language Setting',
            ),
            14 => 
            array (
                'id' => 15,
                'core_persons_attributes_id' => 8,
                'core_localization_id' => 1,
                'value' => 'Jelszó újra megadása kötelező',
            ),
            15 => 
            array (
                'id' => 16,
                'core_persons_attributes_id' => 8,
                'core_localization_id' => 2,
                'value' => 'Password repeat is required',
            ),
            16 => 
            array (
                'id' => 17,
                'core_persons_attributes_id' => 9,
                'core_localization_id' => 1,
                'value' => 'Adóazonosító jel',
            ),
            17 => 
            array (
                'id' => 18,
                'core_persons_attributes_id' => 9,
                'core_localization_id' => 2,
                'value' => 'Tax ID',
            ),
            18 => 
            array (
                'id' => 19,
                'core_persons_attributes_id' => 10,
                'core_localization_id' => 1,
                'value' => 'Eddig az időpontig nem léphet be',
            ),
            19 => 
            array (
                'id' => 20,
                'core_persons_attributes_id' => 10,
                'core_localization_id' => 2,
                'value' => 'Can not log in till',
            ),
        ));

        
    }
}