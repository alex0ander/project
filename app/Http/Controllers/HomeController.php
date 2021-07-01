<?php

namespace App\Http\Controllers;

use App\Models\Users;

class HomeController extends Controller
{
    public function list() {

        $users = Users::get();
        return view("home")->with("users" , $users);

    }
}
