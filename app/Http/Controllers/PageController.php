<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use League\CommonMark\Converter;

class PageController extends Controller
{
    protected $converter;

    public function __construct(Converter $converter) {
        $this->converter = $converter;
    }

    public function home() {
        Session::put('hash', str_random(20));
        return view('home');
    }

    public function about() {
        $markdown = $this->converter->convertToHtml(file_get_contents(base_path() . '/readme.md'));
        $theme = '#383838';
        return view("about", compact('markdown', 'theme'));
    }
}
