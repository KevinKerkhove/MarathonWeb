@extends('layouts.app')

@section('content')




<html>
<h1> les séries</h1>
    <body>
    @if(!empty($series))
        @foreach($series as $serie)
            <div>
                <a href="{{route('serie.show',$serie->id)}}"><img src="http://172.31.146.100/~dut19_groupe16{{$serie->urlImage}}"></a>
                <p>{{$serie->nom}}</p>
            </div>


        @endforeach
    @else
        <h3>aucun jeux</h3>
    @endif
    </body>
    </html>
@endsection