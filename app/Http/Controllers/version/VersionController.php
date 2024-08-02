<?php

namespace App\Http\Controllers\version;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VersionController extends Controller
{
    public function show()
    {
        return response()->json(['version' => '1.0.0']);
    }
}
