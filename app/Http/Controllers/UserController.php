<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('phone')->get();
        return view('one_to_one.users', compact('users'));
    }
}
