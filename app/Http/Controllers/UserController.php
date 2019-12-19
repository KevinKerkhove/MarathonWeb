<?php


namespace App\Http\Controllers;


use App\Serie;
use App\Comment;
use App\Genre;
use App\Episode;
use App\User;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;

class UserController
{
    public function index()
    {
        $user = Auth::user();

        $avatar=$user->avatar;
        $nom=$user->name;
        $email=$user->email;
        $episodes=$user->episodes;

        return view('user.show',['avatar'=>$avatar,'nom'=>$nom,'email'=>$email,'episodes'=>$episodes]);
    }

    public function deconnexion()
    {
        auth()->logout();

        return redirect('/');
    }

}