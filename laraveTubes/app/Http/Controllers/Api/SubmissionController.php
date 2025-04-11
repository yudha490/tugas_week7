<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Submission;

class SubmissionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'mission_id' => 'required|exists:missions,id',
            'proof' => 'required|file|mimes:mp4,avi,mov|max:51200', // Max 50MB
        ]);

        $filePath = $request->file('proof')->store('proofs', 'public');

        $submission = Submission::create([
            'user_id' => $validated['user_id'],
            'mission_id' => $validated['mission_id'],
            'proof' => $filePath,
        ]);

        return response()->json(['success' => true, 'submission' => $submission], 201);
    }
}
