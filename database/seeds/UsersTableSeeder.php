<?php

use App\User;
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
        User::create([
            'name' => 'Mei Gwilym',
            'email' => 'mei.gwilym@gmail.com',
            'password' => bcrypt('JuT3ZL3kyNXDxwrxMZyX'),
            'admin' => true,
        ]);
    }
}
