<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('admin.books.index');
    }

    public function create(){
        return view('admin.books.create');

    }

    public function show($libro){
        return view('admin.books.show', compact('libro'));
    }

    public function edit($libro){
        return view('admin.books.edit', compact('libro'));
    }
}
