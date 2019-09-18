<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $pagename = '';
        $meta = '';
        $body = '';
        return view('index')
            ->with('pagename', $pagename)
            ->with('meta', $meta)
            ->with('body', $body);
    }
}
