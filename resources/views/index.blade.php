<?php
use App\Serie;
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> <!-- jQuery est inclus ! -->
<script !src="/resources/js/jq.js"></script>
@extends('layouts.app')

@section('content')
<div id="first_page">
    <div id="container_hr">
        <div id="container_scroll">
            <hr id="hrscroll">
            <span id="txt_scroll">scroll down</span>
        </div>
        <hr id="hr1">
        <hr id="hr2">
        <hr id="hr3">
        <hr id="hr4">
    </div>
</div>

<div id="content">
    <div id="container_content">

        @if(!empty($series4))
            <div id="divisions">
            <div class="division divison_serie_les_mieux_notees">
                <div class="titre_division">
                    <span>Les séries les mieux notées</span>
                </div>
                <div class="content_division">
                    @foreach($series4 as $serie4)
                        <div class="item_division">
                            <a href="{{route('serie.show',$serie4->id)}}"><img src="http://172.31.146.100/~dut19_groupe16{{$serie4->urlImage}}"></a>
                            <span>{{$serie4->nom}}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            @foreach($genres as $genre)
                <div>{{$genre['nom']}}</div>
                @foreach($genre->series as $s)
                    <a href="{{route('serie.show',$s->id)}}"><img src="http://172.31.146.100/~dut19_groupe16{{$s->urlImage}}"></a>
                        <p></br>{{$s->nom}}</br>{!!$s->resume!!}</p></br>
                @endforeach
            @endforeach
            </div>
            <div id="comu"></div>
        @else
            <h3>Aucune série</h3>
        @endif
    </div>
</div>
@endsection
