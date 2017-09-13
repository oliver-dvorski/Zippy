<?php

namespace App\Http\Controllers;

use Hash;
use App\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function form()
    {
        return view("text-note");
    }

    // for the love of god, refactor this
    public function store()
    {
        request()->validate([
            'content' => 'required'
        ]);
        request()->request->add(['id' => $this->generateNoteId(6)]);
        $note = Note::create(request()->all());
        return redirect('/note/' . request()->id);
    }

    public function show(Note $note)
    {
        if ($note->password === null) {
            return view("note.show", compact('note'));
        }
        return view("note.passwordForm", compact('note'));
    }

    public function checkPassword(Note $note)
    {
        if (Hash::check(request()->password, $note->password)) {
            return view("note.show", compact('note'));
        }
        return redirect()->back();
    }

    public function generateNoteId($characters)
    {
        $id = str_random($characters);
        if (Note::find($id))
            $this->generateNoteId($characters++);
        return $id;
    }

}
