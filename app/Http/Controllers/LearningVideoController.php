<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LearningVideo;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LearningVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $learningVideos = DB::table('learning_videos')->paginate(6);
        return view('pages.curriculum.learning_videos', compact('learningVideos'));
    }

    public function LearnVideoSearch(Request $request)
    {
        $search = $request->input('search');

        $learningVideos = DB::table('learning_videos')
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%');
            })
            ->get();

        return response()->json($learningVideos);
    }
}
