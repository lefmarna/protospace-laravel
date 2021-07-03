<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("ALTER TABLE comments AUTO_INCREMENT = 1 ");
        factory(Comment::class, 3000)->create();
    }
}
