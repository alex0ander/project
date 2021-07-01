<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function userInfo(Request $request) {
        $userId = $request->id;

        $user = Users::where('id' , $userId)->get();
        return view('user')->with("user" , $user);
    }

    public function userUpdate(Request $request) {

        $userId = $request->id;

        $user = Users::where('id' , $userId)->get();

        if (preg_match("/updateUser/" , $request)) {
            $username = $request->username;
            $password = $request->password;
            $email = $request->email;
            $type = $request->type;
            Users::where('id' , $userId)->update([
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'type' => $type
                ]);
            $user = Users::where('id' , $userId)->get();
            return view("user")->with("user" , $user);
        }

        return view("userUpdate")->with('user' , $user);
    }

    public function userCreate(Request $request) {

        if (preg_match("/createUser/" , $request)) {
            $username = $request->username;
            $password = $request->password;
            $email = $request->email;
            $type = $request->type;
            $usersCreate = Users::create([
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'type' => $type
                ]);
            $users = Users::get();
            return view("home")->with('users' , $users);
        }

        return view("userCreate");

    }

    public function userDelete(Request $request) {
        $userId = $request->id;
        
        Users::where('id' , $userId)->delete();

        $users = Users::get();
        return view("home")->with('users' , $users);
    }

}