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
                'id' => 1,
                'title' => 'Neque qui perspiciatis est ut deserunt itaque.',
                'description' => 'Ut eaque dicta est nihil ab repellat. Reprehenderit repellendus qui et aspernatur aut. Dolores autem odit molestiae deleniti in aliquam. Quia sit distinctio voluptas sunt saepe.',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Adipisci qui molestiae totam sunt sint impedit.',
                'description' => 'Qui quo accusamus aspernatur ullam sequi voluptates non. Eum rem nobis nesciunt voluptate. Nostrum omnis dignissimos enim quas aut laboriosam ipsam qui.',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Dignissimos illo quasi ex quas.',
                'description' => 'Fugit voluptatibus ea aut iure modi placeat id vero. Nobis voluptatem consequatur quia eum necessitatibus.',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Velit quasi sunt aperiam voluptatem laudantium.',
                'description' => 'Dolor perferendis minima fuga exercitationem iusto quo error. Cumque culpa autem sed.',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'A hic itaque vitae sit a. Rerum deleniti quo ea.',
                'description' => 'Et quod ut ut libero. Iste debitis pariatur eligendi.',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Et eos ut impedit omnis consequuntur nobis.',
                'description' => 'Ipsum fugiat aut inventore aut molestiae ut alias dolorem. Labore voluptatem voluptate enim enim et. Aliquam fugit rerum cum.',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Et quidem magnam deleniti quod blanditiis eius.',
                'description' => 'Voluptatem incidunt quia et nostrum quibusdam sequi. Dolore ipsa at placeat quis nam sint aliquid. Debitis voluptatum consectetur hic incidunt dolores neque. Praesentium animi non qui natus.',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Est sunt doloremque expedita quo iste non.',
                'description' => 'Explicabo illo ipsa ut nesciunt et. Voluptates nam alias nihil autem ut. Adipisci pariatur sunt qui perspiciatis.',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Molestiae dignissimos eos natus.',
                'description' => 'Est aperiam nobis accusamus deserunt dolore itaque consectetur omnis. Velit odit a similique. Facilis enim ab dolor ipsa.',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Ab in qui omnis adipisci iure.',
                'description' => 'Ratione temporibus aliquam dicta quasi itaque. Illum vel et sit libero quisquam est accusamus.',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));

        
    }
}