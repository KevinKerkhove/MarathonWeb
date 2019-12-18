<html>
<h1> les séries</h1>
    <body>
    @if(!empty($series))
        @foreach($series as $serie)
            <div>
                <a href="{{route('serie.show',$serie->nom)}}"><img src="{{$serie->urlImage}}"></a>
                <p>{{$serie->nom}}</p>
            </div>


        @endforeach
    @else
        <h3>aucun jeux</h3>
    @endif
    </body>
    </html>
