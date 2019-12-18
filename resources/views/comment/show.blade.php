@extends('layouts.app')

@section('content')
    <div class="text-center" style="margin-top: 2rem">
        @if($action == 'delete')
            <h3>Suppression d'un commentaire</h3>
        @endif
        <hr class="mt-2 mb-2">
    </div>
    <div>
        <p><strong>Content : </strong>{{$commentaire->content}}</p>
    </div>
    <div>
        <p><strong>Note : </strong>{{$commentaire->note}}</p>
    </div>
    <form action="{{route('comment.destroy',$commentaire->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <div class="text-center">
            <button type="submit" name="delete" value="valide">Valide</button>
            <button type="submit" name="delete" value="annule">Annule</button>
        </div>
    </form>

@endsection