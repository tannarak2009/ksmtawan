<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index()
    {
        return view('todo.index');
    }
}
