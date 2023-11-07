<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function bekatest()
    {
        // $user = User::create([
        //     'name' => 'Beka',
        //     'email' => 'beka@gmail.com',
        //     'password' => 'asdfasdf',
        // ]);

        $users = User::where('id', 1) -> first();
        if($users){

         $users -> update([

            'name' => 'eridan',
            'email' => 'eridanus@gmail.com',

         ]);

        }

        $users = User::all();
        dd($users->toArray());


    }

}
