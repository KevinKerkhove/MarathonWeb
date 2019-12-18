<?php

namespace App\Http\Controllers;


use App\Serie;
use App\Comment;
use App\Genre;
use App\Episode;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SerieController extends Controller{


    public function index(){
        $series=Serie::all();
        return view('serie.index',['series'=>$series]);

    }

    public function show(Request $request,$id){
        $action = $request->query('action', 'show');
        $serie=Serie::find($id);
        $genres=$serie->genres;
        $commentaires=$serie->comments;
        $episodes=$serie->episodes;

        $isAdmin=false;
        $utilisateur = Auth::user();
        if($utilisateur!=null) {
            $u=$utilisateur->id;
            $uId=User::find($u);
            if($uId->administrateur==1){
                $isAdmin=true;
            }
        }

        return view('serie.show',['serie'=>$serie,'action'=>$action,'episodes'=>$episodes,'commentaires'=>$commentaires,'genres'=>$genres,'isAdmin'=>$isAdmin]);
    }
}


