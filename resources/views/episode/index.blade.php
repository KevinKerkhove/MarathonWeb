@extends('layouts.app')

@section('content')
    <html>
    <body>
    <div>
        <img src="http://172.31.146.100/~dut19_groupe16{{$episodes->urlImage}}">

    </div>

    <div>
        <p>Episode{{$episodes->numero}}{{$episodes->nom}}</p>
    </div>

    <div>
        <p>Saison: {{$episodes->saison}}</p>
    </div>


    <div>
        <p><strong>Resume:</strong>{!!$sepisodes->resume!!}</p>
    </div>

    <div>
        <p><strong>Durée:</strong>{{$episodes->langue}}</p>
    </div>


    <div>
        <p><strong>Date de sortie:</strong>{{$episodes->premiere}}</p>
    </div>


    <div>
        <p><strong>Statut:</strong>{{$serie->statut}}</p>
    </div>

    <div>
        <p><strong>Date de sortie:</strong>{{$serie->premiere}}</p>
    </div>
    </body>
    </html>
    @endsection