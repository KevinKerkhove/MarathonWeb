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

            @if(!empty($series4View))
                <div id="divisions">
                    <div class="division divison_serie_les_mieux_notees">
                        <div class="titre_division">
                            <span>Les séries les mieux notées</span>
                        </div>
                        <div class="content_division">
                            @foreach($series4View as $serie4View)
                                <div class="item_division">
                                    <a href="{{route('serie.show',$serie4View->id)}}"><img src="{{url($serie4View->urlImage)}}"></a>
                                    <span>{{$serie4View->nom}}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <div class="titre_division">
                            <span>Les séries les blablabla</span>
                        </div>
                        <div class="content_division">
                            @foreach($series4Here as $serie4Here)
                                <div class="item_division">
                                    <a href="{{route('serie.show',$serie4Here->id)}}"><img src="{{url($serie4Here->urlImage)}}"></a>
                                    <span>{{$serie4Here->nom}}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div id="comu">
                    @foreach($fiveComments as $fiveComment)
                        <div class="item_division">
                            <span>{{$fiveComment->user_id}}</span>
                            <span>{{$fiveComment->content}}</span>
                        </div>
                    @endforeach
                </div>
            @else
                <h3>Aucune série</h3>
            @endif
        </div>
    </div>
@endsection
