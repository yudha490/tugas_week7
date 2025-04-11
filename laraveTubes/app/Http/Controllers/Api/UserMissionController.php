<?php

namespace App\Http\Controllers\Api;

use App\Models\UserMission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserMissionController extends Controller
{
    public function store(Request $request)
    {
        $userMission = UserMission::create($request->all());
        return response()->json($userMission, 201);
    }

    public function update(Request $request, $id)
    {
        $userMission = UserMission::findOrFail($id);
        $userMission->update(['is_completed' => $request->is_completed]);
        return response()->json($userMission);
    }
}
