<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistributionRecordController extends Controller
{
    public function uploadPhoto(Request $request, $recordId) { return response()->json(['message' => 'photo uploaded']); }
    public function uploadSignature(Request $request, $recordId) { return response()->json(['message' => 'signature uploaded']); }
    public function updateGps(Request $request, $recordId) { return response()->json(['message' => 'gps updated']); }
}


