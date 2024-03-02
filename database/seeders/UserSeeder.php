<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = File::get(path: 'database/jsons/Users.json');
        $users = json_decode($users, true);

        // $users = [
        //     [
        //         "username" => "dave",
        //         "password" => "p",
        //         "email" => "dave@d.com"
        //     ],
        //     [
        //         "username" => "ed",
        //         "password" => "p",
        //         "email" => "ed@d.com"
        //     ],
        //     [
        //         "username" => "bob",
        //         "password" => "p",
        //         "email" => "bob@d.com"
        //     ]
        // ];
        // $user = [
        //     "username" => "dave",
        //     "password" => "p",
        //     "email" => "dave@d.com"
        // ];

        // foreach ($users as $user) {
        //     User::create($user);
        // }
        foreach ($users as $user) {
            User::insert($user);
        }



        // $users = User::inRandomOrder()->take(20)->get();

        // dd($users);
    }
}
