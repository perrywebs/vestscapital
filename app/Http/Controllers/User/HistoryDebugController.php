<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class HistoryDebugController extends Controller
{
    public function index()
    {
        return response('History Debug Working!', 200);
    }
}
