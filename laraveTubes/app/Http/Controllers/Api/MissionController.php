<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mission;

class MissionController extends Controller
{
    public function index()
    {
        $missions = Mission::all();
        return response()->json($missions);
    }
}


