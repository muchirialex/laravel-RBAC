<?php

use App\User;
use Illuminate\Database\Seeder;
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
        $user = User::where('email', 'danksavi@gmail.com')->first();
        if (is_null($user)) {
            $user = new User();
            $user->name = "Daniel Kisavi";
            $user->email = "danksavi@gmail.com";
            $user->password = Hash::make('digit!@#$');
            $user->save();
        }
    }
}