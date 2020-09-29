<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Administrator';
        $user->email = 'admin@sandbox.com';
        $user->password = Hash::make('admin1234');
        $user->save();

        $user = new User;
        $user->name = 'Alice';
        $user->email = 'alice@wonderland.com';
        $user->password = Hash::make('alice1234');
        $user->save();

        User::factory()->count(10)->create();

    }
}
