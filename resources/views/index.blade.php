<?php
use App\Serie;
?>

@extends('layouts.app')

@section('content')

    @if(!empty($series4))
        pipi
        @foreach($series4 as $serie4)
            <img src="{{$serie4->urlImage}}"><p></br>{{$serie4->nom}}</br>{!!$serie4->resume!!}</p></br>
        @endforeach
        @foreach($genres as $genre)
            <div>{{$genre['nom']}}</div>
            @foreach($genre->series as $s)
                <img src="{{$s->urlImage}}"><p></br>{{$s->nom}}</br>{!!$s->resume!!}</p></br>
            @endforeach
        @endforeach
    @else
        <h3>Aucune série</h3>
    @endif

@endsection