<?php

namespace App\Http\Controllers;


use App\Serie;
use App\Comment;
use App\Genre;
use App\Episode;
use Illuminate\Http\Request;

class SerieController extends Controller{


    public function index(){
        $series=Serie::all();
        return view('serie.index',['series'=>$series]);

    }



    public function show(Request $request,$nom){
        $action = $request->query('action', 'show');
        $series=Serie::find($nom);
        return view('serie.show',['series'=>$series,'action'=>$action]);
    }


}


