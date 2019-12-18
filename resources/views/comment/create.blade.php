@extends('layouts.app')

@section('content')

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{--
         formulaire de saisie d'un jeu
         la fonction 'route' utilise un nom de route
         'csrf_field' ajoute un champ caché qui permet de vérifier
           que le formulaire vient du serveur.
      --}}

    <form action="{{route('comment.store',$id)}}" method="POST">
        {!! csrf_field() !!}
        <div class="text-center" style="margin-top: 2rem">
            <h3>Création d'un commentaire</h3>
            <hr class="mt-2 mb-2">
        </div>
        <div>
            {{-- le nom --}}
            <label for="content"><strong>Contenu :</strong></label>
            <input type="text" id="content" name="contenu"
                   value="{{ old('content') }}">
        </div>
        <div>
            {{-- l'age min --}}
            <label for="note"><strong>Note :</strong></label>
            <input type="float" id="note" name="note"
                   value="{{ old('note') }}">
        </div>
        <div>
            <button class="btn btn-success" type="submit">Valide</button>
        </div>
    </form>

@endsection