<html>
    <body>
        <div>
            <img src="{{$series->urlImage}}">

        </div>

        <div>
            <p>{{$series->nom}}</p>
        </div>


        <div>
            <p><strong>Resume:</strong>{{$series->resume}}</p>
        </div>

        <div>
            <p><strong>Langue:</strong>{{$series->langue}}</p>
        </div>


        <div>
            <p><strong>Note:</strong>{{$series->note}}</p>
        </div>


        <div>
            <p><strong>Statut:</strong>{{$series->statut}}</p>
        </div>

        <div>
            <p><strong>Date de sortie:</strong>{{$series->premiere}}</p>
        </div>

        <div>
            <p><strong>Avis:</strong>{{$serie->avis}}</p>
        </div>

    </body>
</html>
