<html>
<body>
    <div>
        <p><img scr="{{url($user->avatar)}}">{{$user->name}}</p>
    </div>
    <div>
        @foreach($series as $serie)
            <img src="{{url($serie->urlImage)}}">
            <p>{{$serie->nom}}</p>
        @endforeach
    </div>
</body>
</html>
