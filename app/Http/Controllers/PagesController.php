<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
         return view('pages.index');
    }

    public function show($id) {
        $titles = ['A','B','C','D'];
        return view('/pages.show',
            ['id' => $id, 'title' => $titles[$id]]);
    }
}
