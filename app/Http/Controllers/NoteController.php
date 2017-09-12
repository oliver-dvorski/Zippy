<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function form()
    {
        return view("text-note");
    }

    public function store()
    {
        request()->validate([
            'note' => 'required'
        ]);
    }

    public function show($url)
    {
        //
    }

}
