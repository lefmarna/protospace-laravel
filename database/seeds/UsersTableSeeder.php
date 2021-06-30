<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'あああ',
                'profile' => 'プロフィール',
                'occupation' => '所属',
                'position' => '役職',
                'email' => 'test@test.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'いいい',
                'profile' => 'ぷろふぃーる',
                'occupation' => 'しょぞく',
                'position' => 'やくしょく',
                'email' => 'test@test.be',
                'password' => Hash::make('password123'),
            ],
        ]);
    }
}
