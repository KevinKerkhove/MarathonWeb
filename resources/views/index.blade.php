<?php
use App\Serie;
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> <!-- jQuery est inclus ! -->
<script !src="/resources/js/jq.js"></script>
@extends('layouts.app')

@section('content')
<<<<<<< HEAD
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
=======
<div id="first_page">

    <div id="container_hr">
        <div id="slogan">
            <span id="sur_titre_slogan">gardez un oeil</span>
            <span id="titre_slogan">sur vos séries préférées</span>
            <span id="sous_titre_slogan">Sur GLOW vous disposez d'un regard sur plus de 3000 épisodes</span>
        </div>
        <div id="container_scroll">
            <hr id="hrscroll">
            <span id="txt_scroll">scroll down</span>
>>>>>>> e73460ecf7b2d2752fd07798cc8d5e8f86430fc0
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
<<<<<<< HEAD
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
=======
                    <div class="content_division">
                        @foreach($series4View as $serie4View)
                            <div class="item_division">
                                <a href="{{route('serie.show',$serie4View->id)}}"><div class="item_division_hover"><span>Plus...</span></div><img src="{{url($serie4View->urlImage)}}"></a>
                                <span>{{$serie4View->nom}}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div>
                    <div class="titre_division">
                        <span>Les dernières sorties</span>
                    </div>
                    <div class="content_division">
                        @foreach($series4Here as $serie4Here)
                            <div class="item_division">
                                <a href="{{route('serie.show',$serie4Here->id)}}"><div class="item_division_hover"><span>Plus...</span></div><img src="{{url($serie4Here->urlImage)}}"></a>
                                <span>{{$serie4Here->nom}}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
            <div id="comu">
                <div class="titre_comu">
                    <span>Communauté</span>
                </div>
                @foreach($fiveComments as $fiveComment)
                    <div class="item_division">
                        <span>{{$fiveComment->content}}</span>
                    </div>
                @endforeach
            </div>
        @else
            <h3>Aucune série</h3>
        @endif
>>>>>>> e73460ecf7b2d2752fd07798cc8d5e8f86430fc0
    </div>
@endsection
