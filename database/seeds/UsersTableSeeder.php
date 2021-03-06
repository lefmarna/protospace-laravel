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
        DB::unprepared("ALTER TABLE users AUTO_INCREMENT = 1 ");
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
            [
                'name' => 'ううう',
                'profile' => 'profile',
                'occupation' => 'occupation',
                'position' => 'position',
                'email' => 'test@test.jp',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'えええ',
                'profile' => 'purofi-ru',
                'occupation' => 'syozoku',
                'position' => 'yakusyoku',
                'email' => 'test@test.co.jp',
                'password' => Hash::make('password123'),
            ],
        ]);
    }
}
