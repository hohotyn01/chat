<?php

namespace App\Http\Controllers;

use App\Events\Chat;
use Illuminate\Http\Request;

class SendMessageController extends Controller
{
    public function message(Request $request)
    {
        event(new Chat($request->message));
    }
}
