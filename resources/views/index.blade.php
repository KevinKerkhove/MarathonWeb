<?php
use App\Serie;
?>

@extends('layouts.app')

@section('content')

    @if(!empty($series4))
        @foreach($series4 as $serie4)
            <a href="{{route('serie.show',$serie4->id)}}"><img src="http://172.31.146.100/~dut19_groupe16{{$serie4->urlImage}}"></a>
            <p></br>{{$serie4->nom}}</br>{!!$serie4->resume!!}</p></br>
        @endforeach
        @foreach($genres as $genre)
            <div>{{$genre['nom']}}</div>
            @foreach($genre->series as $s)
                <a href="{{route('serie.show',$s->id)}}"><img src=http://172.31.146.100/~dut19_groupe16"{{$s->urlImage}}"></a>
                    <p></br>{{$s->nom}}</br>{!!$s->resume!!}</p></br>
            @endforeach
        @endforeach
    @else
        <h3>Aucune série</h3>
    @endif

@endsection