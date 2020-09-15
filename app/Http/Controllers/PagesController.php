<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
         return view('pages.index');
    }

    public function show($id) {
        // $titles = ['A','B','C','D'];
        return view('pages.show', [
            'name' => 'Jeong Jay',
            'id' => $id,
            'text' => '<h3>h3 Text<h3>',
            'array' => [],
            'records' => 'Hello there, I exist'
        ]);
    }
}
