<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;
use App\Genre;

class MainController extends Controller
{
    public function index() {
        $series4=Serie::orderBy('note','DESC')->limit(4)->get();
        $genres=Genre::all();
        return view("index",['series4'=>$series4,'genres'=>$genres]);
    }
}
