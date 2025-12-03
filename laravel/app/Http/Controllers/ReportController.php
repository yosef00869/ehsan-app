<?php

namespace App\Http\Controllers;

class ReportController extends Controller
{
    public function overview() { return response()->json(['data' => ['totalDonations' => 0, 'beneficiariesServed' => 0]]); }
    public function donations() { return response()->json(['data' => []]); }
    public function beneficiaries() { return response()->json(['data' => []]); }
    public function distributions() { return response()->json(['data' => []]); }
}


