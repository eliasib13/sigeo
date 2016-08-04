<?php

/**
 * Created by PhpStorm.
 * User: eliasib
 * Date: 28/6/16
 * Time: 11:32
 */

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'name' => 'Usuario Test',
            'email' => 'usertest@email.com',
            'password' => Hash::make('usertestpwd')
        ]);
    }
}