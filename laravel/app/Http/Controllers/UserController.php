<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() { return response()->json(['data' => [], 'message' => 'list users']); }
    public function store(Request $request) { return response()->json(['message' => 'create user']); }
    public function show($id) { return response()->json(['data' => ['id' => $id]]); }
    public function update(Request $request, $id) { return response()->json(['message' => 'update user']); }
    public function destroy($id) { return response()->json(['message' => 'delete user']); }
}


