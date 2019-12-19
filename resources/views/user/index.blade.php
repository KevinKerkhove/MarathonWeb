@extends('layouts.app')

@section('content')

    <div>
        <img src="{[url($user->avatar)}}">
    </div>

    <div>
        {{$user->name}}
        <br>
        <br>
        Ses commmentaires :
        <br>
        @foreach($comments as $comment)
            @if($comment->user_id==$user->id)
                <ul>
                <li>{{$comment->created_at}}</li>
                <li>{{$comment->note}}</li>
                <li>{{$comment->content}}</li>
                </ul>
                <br>
            @endif
        @endforeach
        <br>
        Les séries que {{$user->name}} suit :
        @if($nbSeries==0)
            Aucune.
        @else
            @foreach($series as $serie)
                <br>
                <ul>
                    <img src="{{url($serie->urlImage)}}">
                    <li>{{$serie->id}}</li>
                </ul>
            @endforeach
        @endif
        <br>
        Durée totale de vision : {{$duree}}
    </div>
@endsection
