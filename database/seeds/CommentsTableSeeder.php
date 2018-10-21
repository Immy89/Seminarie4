<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'userId' => '1',
            'recipeId' => '1',
            'comment' => 'Goda Köttbullar.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);

        Comment::create([
            'userId' => '3',
            'recipeId' => '1',
            'comment' => 'Mycket gott, men jag hade föredragit om receptet inkluderade hur man gör mos till.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);

        Comment::create([
            'userId' => '2',
            'recipeId' => '1',
            'comment' => 'Supergoda, älskas av hela familjen.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);

        Comment::create([
            'userId' => '3',
            'recipeId' => '3',
            'comment' => 'Goda Pannkakor.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);

        Comment::create([
            'userId' => '2',
            'recipeId' => '3',
            'comment' => 'Kul med lite variation på pannkakor, på detta sättet får jag lite hälsosammare mat och barnen får sin önskning om pannkakor uppfylld.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);

        Comment::create([
            'userId' => '2',
            'recipeId' => '2',
            'comment' => 'Älskas av hela familjen.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);

        Comment::create([
            'userId' => '1',
            'recipeId' => '2',
            'comment' => 'Supergoda :)',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);

        Comment::create([
            'userId' => '3',
            'recipeId' => '2',
            'comment' => 'Mycket omtyckta hemma.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);

        Comment::create([
            'userId' => '4',
            'recipeId' => '1',
            'comment' => 'Detta receptet kommer hamna bland våra standard go-to recept.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);
    }
}
