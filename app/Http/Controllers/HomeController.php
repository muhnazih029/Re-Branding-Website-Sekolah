<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $announcements = Announcement::latest()->limit(6)->get();
        $settings = Setting::where('key', 'sambutan_text')->pluck('value', 'image', 'title', 'key');
        return view('pages.index', compact('settings', 'announcements'));
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
