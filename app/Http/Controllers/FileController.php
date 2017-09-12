<?php

namespace App\Http\Controllers;

use File;
use Hash;
use Zipper;
use Session;
use App\Archive;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            $filename = time() . ' - ' . $request->file->getClientOriginalName();
            $request->file->storeAs('Uploaded_Files/' . Session::get('hash') . '/', $filename);
            return response('Success', 200);
        }
        return response($request->all(), 500);
    }

    public function zip($hash, Request $request)
    {
        $files = storage_path('app/Uploaded_Files/' . $hash);

        if (File::exists($files)) {
            Zipper::make(storage_path('app') . '/Archives/' . $hash . '.zip')->add($files)->close();
            File::deleteDirectory($files);
            $url = $this->generateUrl();
            $password = $request->password == '' ? '' : bcrypt($request->password);

            Archive::create([
                'url' => $url,
                'filename' => $hash . '.zip',
                'password' => $password
            ]);

            return redirect('/' . $url)->with('success', 'Archive created');
        }

        return redirect('/');
    }

    public function downloadPage($url)
    {
        $file = Archive::where('url', $url)->first();
        if (!$file) {
            return view("errors.404");
        }
        $hasPassword = $file->password != '' ? true : false;
        if ($file) {
            return view('download', [
                'fileUrl' => $url,
                'hasPassword' => $hasPassword,
                'timeRemaining' => $file->created_at->addMonth()->diffForHumans()
            ]);
        }

        return response()->view('errors.404', [], 404);
    }

    public function download($url, Request $request)
    {
        $file = Archive::where('url', $url)->firstOrFail();
        if ($file->password == '' || Hash::check($request->password, $file->password)) {
            return response()->download(storage_path('app/Archives/' . $file->filename));
        }

        return redirect()->back()->with('error', 'Invalid password');
    }

    protected function generateUrl($count = 4)
    {
        $url = str_random($count);
        if (Archive::where('url', $url)->first()) {
            $this->generateUrl($count++);
        }

        return $url;
    }
}
