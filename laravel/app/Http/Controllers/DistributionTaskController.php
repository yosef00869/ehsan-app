<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistributionTaskController extends Controller
{
    public function index() { return response()->json(['data' => [], 'message' => 'list tasks']); }
    public function store(Request $request) { return response()->json(['message' => 'create task']); }
    public function show($id) { return response()->json(['data' => ['id' => $id]]); }
    public function update(Request $request, $id) { return response()->json(['message' => 'update task']); }
    public function destroy($id) { return response()->json(['message' => 'delete task']); }
    public function assign(Request $request, $id) { return response()->json(['message' => 'assign task']); }
    public function complete(Request $request, $id) { return response()->json(['message' => 'complete task']); }
}


