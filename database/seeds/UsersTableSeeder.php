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
                'id' => '1',
                'name' => 'あああ',
                'profile' => 'プロフィール',
                'occupation' => '所属',
                'position' => '役職',
                'email' => 'test@test.com',
                'password' => Hash::make('password123'),
            ],
            [
                'id' => '2',
                'name' => 'いいい',
                'profile' => 'ぷろふぃーる',
                'occupation' => 'しょぞく',
                'position' => 'やくしょく',
                'email' => 'test@test.be',
                'password' => Hash::make('password123'),
            ],
            [
                'id' => '3',
                'name' => 'ううう',
                'profile' => 'profile',
                'occupation' => 'occupation',
                'position' => 'position',
                'email' => 'test@test.jp',
                'password' => Hash::make('password123'),
            ],
            [
                'id' => '4',
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
