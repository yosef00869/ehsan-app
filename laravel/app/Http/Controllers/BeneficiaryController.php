<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeneficiaryController extends Controller
{
    public function index() { return response()->json(['data' => [], 'message' => 'list beneficiaries']); }
    public function store(Request $request) { return response()->json(['message' => 'create beneficiary']); }
    public function show($id) { return response()->json(['data' => ['id' => $id]]); }
    public function update(Request $request, $id) { return response()->json(['message' => 'update beneficiary']); }
    public function destroy($id) { return response()->json(['message' => 'delete beneficiary']); }
    public function documents($id) { return response()->json(['data' => [], 'message' => 'beneficiary documents']); }
    public function uploadDocument(Request $request, $id) { return response()->json(['message' => 'upload document']); }
}


