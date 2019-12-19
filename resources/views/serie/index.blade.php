@extends('layouts.app')

@section('content')



<div></div>
<h1> les séries</h1>
<div class="filtre">
    @if(!empty($series))
        <h3>Filtrer par genre</h3>
        <form action="{{route('serie.index')}}" method="get">
            <select name="requete">
                <option value="All"
                        @if($requete == "All")selected @endif></option>
                @foreach($genres as $genre)
                    <option value="{{$genre}}" @if($requete==$genre)selected @endif>{{$genre}}</option>
                    @endforeach
            </select>
            <input type="submit" class="btn btn-darl" value="OK">

        </form>

        <div class="La liste de toutes les séries">
            @foreach($series as $serie)
                <div>
                    <a href="{{route('serie.show',$serie->id)}}"><img src="{{url($serie->urlImage)}}"></a>
                    <p>{{$serie->nom}}</p>
                </div>
            @endforeach

        </div>
    @elseif(empty($serie))
        @foreach($series as $serie)
            <div>
                <a href="{{route('serie.show',$serie->id)}}"><img src="{{url($serie->urlImage)}}"></a>
                <p>{{$serie->nom}}</p>
            </div>


        @endforeach
    @else

        <h3>aucune série</h3>
    @endif
</div>

@endsection

