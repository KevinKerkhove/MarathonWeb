<html>
<body>
    <div>
        {{$user->avatar}}
        {{$user->name}}
        {{$user->email}}
        {{$user->id}}
        @foreach($episodes as $episode)
            {{$user->episode}}
        @endforeach
    </div>
</body>
</html>
