<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use League\CommonMark\Converter;

class PageController extends Controller
{
    public function home()
    {
        Session::put('hash', str_random(20));
        return view('home');
    }

    public function about(Converter $converter)
    {
        $markdown = $converter->convertToHtml(file_get_contents(base_path() . '/readme.md'));
        $theme = '#383838';
        return view("about", compact('markdown', 'theme'));
    }
}
