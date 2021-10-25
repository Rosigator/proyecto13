<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'Joel',
            'Ellie',
            'Test',
            'Héctor'
        ];
    }

    return view('Users',compact('users','user'));
}
