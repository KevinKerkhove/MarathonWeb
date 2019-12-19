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
        return view('user.index', ['user' => $user]);
    }


    public function show(Request $request){
        $user=Auth::user()->get();
        $action = $request->query('action', 'show');
        $seen=$user->seen;
        $episodes=$seen->episode_id;
        $seen2=$episodes->seen;
        $series=$episodes->serie_id;

        return view('user.index',['user'=>$user,'episodes'=>$episodes,'seen'=>$seen,'seen2'=>$seen2,'series'=>$series,'action'=>$action]);
    }



}