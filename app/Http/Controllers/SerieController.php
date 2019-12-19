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
        $saisons=Episode::select('saison')->where('serie_id',$id)->groupBy('saison')->get();

        $isAdmin=false;
        $utilisateur = Auth::user();
        if($utilisateur!=null) {
<<<<<<< HEAD
            $uId=User::find($utilisateur->id);
=======
            $u=$utilisateur->id;
            $uId=User::find($u);
>>>>>>> 9832bf9a82d6e886e5ee7251af7b915ab56442d9
            if($uId->administrateur==true){
                $isAdmin=true;
            }
        }

        return view('serie.show',['serie'=>$serie,'action'=>$action,'episodes'=>$episodes,'commentaires'=>$commentaires,'genres'=>$genres,'saisons'=>$saisons,'isAdmin'=>$isAdmin]);
    }
}