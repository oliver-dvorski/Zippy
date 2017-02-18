<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class FileController extends Controller
{
    public function upload(Request $request) {
        if ($request->hasFile('file')) {
            $filename = time() . str_random(3) . '.' . $request->file->extension();
            
            $request->file->storeAs('Uploaded_Files/' . Session::get('hash') . '/', $filename);

            return response('WIP', 200);
        }
        return response('Upload failed (is your file too large?)', 500);
    }
}
