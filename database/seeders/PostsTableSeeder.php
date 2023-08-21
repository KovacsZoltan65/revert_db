<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->truncate();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'description' => 'Labore et eos nesciunt aspernatur nostrum. Accusamus minus qui aperiam nostrum. Ut illum est cum. Illo a id eius voluptas provident eligendi.',
                'id' => 1,
                'title' => 'Tenetur at sint ratione.',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'description' => 'Placeat et temporibus occaecati possimus. Deserunt hic vel est.',
                'id' => 2,
                'title' => 'Ad ducimus placeat qui beatae asperiores.',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'description' => 'Consequuntur ut est consequatur aut voluptas error aut. Sed ut reiciendis similique unde iste perspiciatis. Vel molestiae architecto non porro quibusdam commodi.',
                'id' => 3,
                'title' => 'Nihil odit distinctio harum reprehenderit nihil.',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'created_at' => NULL,
                'description' => 'Dicta sint est in sed quaerat animi. Facere voluptates beatae repellat numquam dolores ullam. Cupiditate est libero doloremque ut dolores. Consectetur voluptatum dolore odio.',
                'id' => 4,
                'title' => 'Accusantium odio ea dolorum minima.',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'created_at' => NULL,
                'description' => 'Non tenetur nobis est dolore dicta nostrum. Sunt quia esse sunt. Qui ea assumenda dolores.',
                'id' => 5,
                'title' => 'Quasi eius ipsum alias eos.',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'created_at' => NULL,
                'description' => 'Laborum at non ab doloribus repellendus hic sit. Quasi accusamus qui totam et omnis quo. Perferendis incidunt accusamus deleniti voluptatibus consectetur accusantium sint eaque.',
                'id' => 6,
                'title' => 'Fugit nihil dolores ut dolor sequi dolorum.',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'created_at' => NULL,
                'description' => 'Numquam rerum placeat cumque ut ratione odio deserunt. Est mollitia optio praesentium quos sint necessitatibus optio incidunt. Nobis quisquam vero ipsam repellendus molestiae nihil.',
                'id' => 7,
                'title' => 'Atque aut incidunt porro voluptatibus mollitia.',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'created_at' => NULL,
                'description' => 'Expedita quia minus tempora eligendi sint. Eum nam beatae provident voluptas. In rem laboriosam quos odit perspiciatis nobis non. Aut repudiandae eum ab quam omnis. Non ut est natus et tempore.',
                'id' => 8,
                'title' => 'Atque deserunt sit sed.',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'created_at' => NULL,
                'description' => 'Mollitia et blanditiis voluptatem. Enim quaerat accusamus rerum alias repellat deleniti dolorum. Velit eveniet perferendis omnis amet laudantium magnam iure. Autem dolorum corporis nihil similique.',
                'id' => 9,
                'title' => 'Qui porro qui qui maiores qui quisquam.',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'created_at' => NULL,
                'description' => 'Sint sit ipsum non quidem est quaerat est. Debitis ut doloremque quis aut. Deserunt molestias animi mollitia. Voluptate expedita veritatis rerum reiciendis et eum dolores nulla.',
                'id' => 10,
                'title' => 'Quod voluptas iure corporis expedita unde.',
                'updated_at' => NULL,
            ),
        ));

        
    }
}