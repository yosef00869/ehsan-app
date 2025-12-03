<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index() { return response()->json(['data' => []]); }
    public function announce(Request $request) { return response()->json(['message' => 'announcement sent']); }
}


