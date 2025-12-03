<?php

namespace App\Http\Controllers;

class AuditLogController extends Controller
{
    public function index() { return response()->json(['data' => []]); }
    public function export() { return response()->json(['message' => 'export started']); }
}


