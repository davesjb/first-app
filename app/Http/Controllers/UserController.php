<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        // die("user controller");
        // $user = new User();

        // $user = User::whereIn("id", "=", "1")->get();
        // $user = User::whereIn("id", [1])->get();
        $user = User::where();

        dd($user->toArray());

        // $user->username2 = "ed";
        // $user->password = "e";
        // $user->email = "e@ed.com";
        // $user->updated_at = "2024-02-28 15:37:16.000000";
        // $user->created_at = "2024-02-28 15:37:16.000000";
        // $user->save();

        // $result = $user->find(1)->toArray();
        $result = $user->where("username2", "=", "ed")->toArray();


        dd($result);
    }
}
