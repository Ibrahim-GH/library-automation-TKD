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
        $user = User::create([
            'name' => 'Moustapha Alshareef',
            'email' => 'm@tkd.com',
            'password' => bcrypt('tkd'),
            'role_id' => 1,
        ]);

        $user = User::create([
            'name' => 'Jafar Alshareef',
            'email' => 'j@tkd.com',
            'password' => bcrypt('tkd'),
            'role_id' => 2,
        ]);
    }
}
