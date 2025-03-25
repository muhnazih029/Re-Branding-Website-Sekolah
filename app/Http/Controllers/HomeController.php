<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    public function index()
    {
        $announcements = DB::table('announcements')
            ->join('users', 'announcements.user_id', '=', 'users.id')
            ->select('announcements.*', 'users.name as author_name')
            ->latest('announcements.created_at')
            ->limit(6)
            ->get();

        $settings = DB::table('settings')
            ->whereIn('key', ['sambutan_text', 'corousel'])
            ->get()
            ->keyBy('key');

        $kepsek = DB::table('teachers')
            ->where('job', 'Kepala Sekolah')
            ->first();

        return view('pages.index', compact('settings', 'kepsek', 'announcements'));
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
