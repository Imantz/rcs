<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Hash;

class AccountController extends Controller
{
    public function storeUser(Request $request) {

        $rules = [
            'username' => 'required', //unique:users,email
            'firstname' => 'required',
            'password' => 'required|min:8|same:password2',
            'lastname' => 'required',
            'checkbox' => 'required',
        ];
        $messages = [
            'password.same' => "paroles nav vienadas",
        ];
        $request->validate($rules, $messages);
        // $users = DB::table('users')->whereGender('female')->get();
                // dd($request->all());
        $userData = [
            'username' => $request->get('username'),
            'user_password' => Hash::make($request->get('password')),
            'user_firstname' => $request->get('firstname'),
            'user_lastname' => $request->get('lastname'),
            'user_country' => $request->get('country'),
        ];
        DB::table('users')->insert($userData);
        Session::flash('success', 'IR REGISTREETEN');
        return redirect()->back();

    }
    public function saveChatMessage(Request $request){
        $messageData = [
            'username' => $request->get('username'),
            'text' => $request->get('text'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('messages')->insert($messageData);
        return ['status' => 'ok'];
    }
    public function getChatMessages() {
        return DB::table('messages')->get();
    }
}

