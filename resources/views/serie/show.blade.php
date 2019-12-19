@extends('layouts.app')

@section('content')

<html>
    <body>
        <div>
            <img src="{{url($serie->urlImage)}}">

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
                            <form action="{{route('comment.update',$commentaire->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                @if($commentaire->validated==0)
                                    <div>
                                        <button class="btn btn-success" type="submit" href="{{URL::route('serie.index')}}">Valider le commentaire</button>
                                    </div>
                                @else
                                    <div>
                                        <button class="btn btn-success" type="submit" href="{{URL::route('serie.index')}}">Dévalider le commentaire</button>
                                    </div>
                                @endif
                                <div>
                                    <button class="btn btn-success" type="submit" href="{{URL::route('serie.index')}}">Supprimer le commentaire</button>
                                </div>
                            </form>
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
                @endforeach
            </div>
        @endif


        @if($utilisateur!=null)
            <div style="text-align:center;">
                <form action="{{route('comment.store')}}" method="POST">
                    {!! csrf_field() !!}
                    <input type="hidden" name="idSerie" value="{{$serie->id}}">
                    <div class="text-center" style="margin-top: 2rem">
                        <h3>Création d'un commentaire</h3>
                        <hr class="mt-2 mb-2">
                    </div>
                    <div>
                        <label for="content"><strong>Contenu :</strong></label>
                        <input type="text" id="content" name="contenu"
                               value="{{ old('content') }}">
                    </div>
                    <div>
                        <label for="note"><strong>Note :</strong></label>
                        <input type="float" id="note" name="note"
                               value="{{ old('note') }}">
                    </div>
                    <div>
                        <button class="btn btn-success" type="submit">Valide</button>
                    </div>
                </form>
            </div>
        @else
            <span>Connectez-vous pour poster un commentaire.</span>
        @endif

    </body>
</html>
@endsection