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


        <div>
           @foreach($saisons as $saison)
                <button>Saison {{$saison->saison}}</button>
                @foreach($episodes as $episode)
                    @if($saison->saison==$episode->saison)
                        <li >
                        <a href="{{route('episode.show',$episode->id)}}">Episode {{$episode->numero}} {{$episode->nom}}</a>
                        </li>
                    @endif
                @endforeach
            @endforeach

        </div>

        @if(!$isAdmin)
            <div>
                @foreach($commentaires as $commentaire)
                    @if(($commentaire->validated)==true)
                        <p><strong>Commentaires: </strong></p>
                        <p>Utilisateur: {{$commentaire->id}}</p>
                        <p>{{$commentaire->content}}</p>
                        <p>Note : {{$commentaire->note}}</p>
                        <p>Date de mise en ligne : {{$commentaire->created_at}}</p>
                        <p>{{$commentaire->validated}}</p>
                        <div style="text-align:center;">
                            <a href="{{route('comment.edit',$commentaire->id)}}">Administration du commentaire</a>
                        </div>
                    @endif
                @endforeach
            </div>
        @else
            <div>
                @foreach($commentaires as $commentaire)
                    <p><strong>Commentaires: </strong></p>
                    <p>Utilisateur: {{$commentaire->id}}</p>
                    <p>{{$commentaire->content}}</p>
                    <p>{{$commentaire->note}}</p>
                    <p>{{$commentaire->created_at}}</p>
                    <p>{{$commentaire->validated}}</p>
                @endforeach
            </div>
        @endif



        <div style="text-align:center;">
            <h4><a href="{{route('comment.create',$serie->id)}}">Ajouter un commentaire</a></h4>
        </div>

    </body>
</html>
@endsection