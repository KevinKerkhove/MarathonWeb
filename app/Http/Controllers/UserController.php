<?php


namespace App\Http\Controllers;


use App\Serie;
use App\Comment;
use App\Genre;
use App\Episode;
use App\User;

class UserController
{
    public function index()
    {
        $users = User::all();
        return view('user.index', ['users' => $users]);

    }
}