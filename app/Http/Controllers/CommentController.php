<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function create($id)
    {
        return view('comment.create',$id);
    }

    public function store(Request $request,$id)
    {
        $this->validate(
            $request,
            [
                'content' => 'required',
                'note' => 'required',
                'validated' => false
            ]
        );

        $commentaire= new Comment;
        $user = Auth::user();

        $commentaire->serie_id = $id;
        $commentaire->user_id = $user->id;
        $commentaire->content = $request->contenu;
        $commentaire->note = $request->note;

        $commentaire->save();

        return redirect('/comment');
    }

    public function show(Request $request, $id)
    {
        $action = $request->query('action', 'show');
        $commentaire = Comment::find($id);
        return view('comment.show', ['commentaire' => $commentaire, 'action' => $action]);
    }

    public function destroy(Request $request, $id)
    {
        $commentaire = Comment::find($id);

        if ($request->delete == 'valide') {
            $commentaire->delete();
        }
        return redirect()->route('comment.index');
    }
}