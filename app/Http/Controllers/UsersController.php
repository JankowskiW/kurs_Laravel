<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        //$users = User::where('age','>=', 21) ->get();

        return view('users/index', compact('users'));
        // Lub mozna uzyc skladni z kropka: return view('user.index');
    }

    public function store()
    {
        $user = new User;
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        //Lub zamiast linijek powyzej mozna zapisac: User::create(request()->all);
        return back();
    }
}
