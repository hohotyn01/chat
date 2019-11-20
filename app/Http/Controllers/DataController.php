<?php

namespace App\Http\Controllers;

use App\Events\Chat;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function message(Request $request)
    {
        event(new Chat($request->message));
    }
}
