<html>
    <body>
        <div>
            <img src="{{$serie->urlImage}}">

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
            <p><strong>Commentaires: </strong></p>
            @foreach($commentaires as $commentaire)
                <p><strong>Utilisateur: </strong>{{$commentaire->id}}</p>
                <p>{{$commentaire->content}}</p>
            @endforeach
        </div>

    </body>
</html>
