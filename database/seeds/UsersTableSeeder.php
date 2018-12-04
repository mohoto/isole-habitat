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
            'name' =>'walid',
            'email' => 'walid.benmouffok@gmail.com',
            'password' => bcrypt('mohomoho72'),
            'role' => 'admin',
        ]);
    }
}
