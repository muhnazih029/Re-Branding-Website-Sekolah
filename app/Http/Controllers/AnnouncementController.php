<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AnnouncementController extends Controller
{
    public function index(Request $request, $type = 'news')
    {
        $titleMap = [
            'news' => 'PRESTASI SEKOLAH',
            'announcement' => 'BERITA SEKOLAH',
            'competition' => 'LOMBA'
        ];
        $announcements = DB::table('announcements')
            ->join('users', 'announcements.user_id', '=', 'users.id')
            ->select('announcements.*', 'users.name as author')
            ->where('announcements.type', $type)
            ->orderBy('announcements.created_at', 'desc')
            ->paginate(6);

        return view('pages.announcement.school_news', [
            'announcements' => $announcements,
            'type' => $type,
            'title' => $titleMap[$type]
        ]);
    }

    public function new_student()
    {
        return view('pages.announcement.new_student_registration');
    }

    public function AnnouncementSearch(Request $request)
    {
        $type = $request->input('type', 'news');
        $search = $request->input('search');

        $announcements = DB::table('announcements')
            ->join('users', 'announcements.user_id', '=', 'users.id')
            ->select('announcements.*', 'users.name as author')
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('announcements.title', 'like', "%$search%")
                      ->orWhere('announcements.content', 'like', "%$search%");
                });
            })
            ->where('announcements.type', $type)
            ->orderBy('announcements.created_at', 'desc')
            ->limit(6)
            ->get();

        return response()->json($announcements);
    }

    public function show($type, $slug)
    {
        $announcement = DB::table('announcements')
            ->join('users', 'announcements.user_id', '=', 'users.id')
            ->select('announcements.*', 'users.name as author')
            ->where('announcements.type', $type)
            ->where('announcements.slug', $slug)
            ->first();

        if (!$announcement) {
            abort(404);
        }

        return view('pages.announcement.detail', compact('announcement'));
    }
}
