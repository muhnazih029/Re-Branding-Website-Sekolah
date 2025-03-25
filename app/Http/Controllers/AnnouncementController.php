<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = DB::table('announcements')
            ->join('users', 'announcements.user_id', '=', 'users.id')
            ->select('announcements.*', 'users.name as author')
            ->orderBy('announcements.created_at', 'desc')
            ->paginate(10);

        return view('announcements.index', compact('announcements'));
    }

    public function new_student()
    {
        return view('pages.announcement.new_student_registration');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announcement $announcement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        //
    }
}
