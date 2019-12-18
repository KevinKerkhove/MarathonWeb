@extends('layouts.app')

@section('content')




<html>
    <body>
        <div>
            <img src="http://172.31.146.100/~dut19_groupe16{{$serie->urlImage}}">

        </div>

        <div>
            <p>{{$serie->nom}}</p>
        </div>


        <div>
            <p><strong>Resume:</strong>{!!$serie->resume!!}</p>
        </div>

        <div>
            <p><strong>Langue:</strong>{{$serie->langue}}</p>
        </div>


        <div>
            <p><strong>Note:</strong>{{$serie->note}}</p>
        </div>


        <div>
            <p><strong>Statut:</strong>{{$serie->statut}}</p>
        </div>

        <div>
            <p><strong>Date de sortie:</strong>{{$serie->premiere}}</p>
        </div>

        <div>
            <p><strong>Avis:</strong>{{$serie->avis}}</p>
        </div>

        <div>
            <p><strong>Genres: </strong></p>
            @foreach($genres as $genre)
                <p>{{$genre->nom}}</p>
            @endforeach
        </div>

        @if(!$isAdmin)
            <div>
                @foreach($commentaires as $commentaire)
                    @if(($commentaire->validated)==true)
                        <p><strong>Commentaires: </strong></p>
                        <p>Utilisateur: {{$commentaire->id}}</p>
                        <p>{{$commentaire->content}}</p>
                    @endif
                @endforeach
            </div>
        @else
            <div>
                @foreach($commentaires as $commentaire)
                    <p><strong>Commentaires: </strong></p>
                    <p>Utilisateur: {{$commentaire->id}}</p>
                    <p>{{$commentaire->content}}</p>
                @endforeach
            </div>
        @endif



        <div style="text-align:center;">
            <h4><a href="{{route('comment.create',$serie->id)}}" method="POST">Ajouter un commentaire</a></h4>
        </div>

    </body>
</html>
@endsection