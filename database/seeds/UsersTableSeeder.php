<?php

use Illuminate\Database\Seeder;

use App\Models\Timezone;
use App\Models\User;

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
            'first_name'        => 'Brian',
            'last_name'         => 'Rogers',
            'timezone_id'       => Timezone::where(['title' => 'Mountain'])->first()->id,
            'email'             => 'captbrogers@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'is_admin'          => true,
            'password'          => bcrypt('password'),
            'api_token'         => str_random(32),
        ]);

        User::create([
            'first_name'        => 'Test',
            'last_name'         => 'User',
            'timezone_id'       => Timezone::where(['title' => 'Central'])->first()->id,
            'email'             => 'username@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'is_admin'          => false,
            'password'          => bcrypt('password'),
            'api_token'         => str_random(32),
        ]);
    }
}
