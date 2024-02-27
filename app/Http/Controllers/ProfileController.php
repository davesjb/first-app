<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function show($id)
    {
        // die($id);
        $data = [
            "id" => $id
        ];

        return view("profile", $data);
    }
}
