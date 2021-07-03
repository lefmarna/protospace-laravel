<?php

use Illuminate\Database\Seeder;
use App\Models\Prototype;

class PrototypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("ALTER TABLE prototypes AUTO_INCREMENT = 1 ");
        factory(Prototype::class, 200)->create();
    }
}
