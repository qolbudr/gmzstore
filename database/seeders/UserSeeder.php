<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

use Hash;

use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        
        $user = new User();
        $user->name = 'Qolbu Dzikru';
        $user->email = 'qolbu.dzikru@protonmail.com';
        $user->password = Hash::make('Dzikru!234');
        $user->save();
    }
}
