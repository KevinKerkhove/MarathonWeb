<?php

use App\Serie;
use App\Comment;
use App\Genre;
use App\Episode;
use Illuminate\Http\Request;

class EpisodeController
{

    public function index(){
        $episodes=Episode::all();
        return view('episode.index',['episodes'=>$episodes]);

    }
}