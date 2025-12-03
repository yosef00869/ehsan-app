<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index() { return response()->json(['data' => [], 'message' => 'list donations']); }
    public function store(Request $request) { return response()->json(['message' => 'create donation']); }
    public function show($id) { return response()->json(['data' => ['id' => $id]]); }
    public function update(Request $request, $id) { return response()->json(['message' => 'update donation']); }
    public function destroy($id) { return response()->json(['message' => 'delete donation']); }
}


