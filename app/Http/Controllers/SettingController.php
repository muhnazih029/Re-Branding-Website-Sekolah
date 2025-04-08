<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function vision_mission()
    {
        $settings = DB::table('settings')
            ->whereIn('key', ['visi', 'misi'])
            ->get()
            ->keyBy('key');
        return view('pages.profile.vision_mission', compact('settings'));
    }

    public function history()
    {
        $settings = DB::table('settings')
            ->whereIn('key', ['sejarah_text'])
            ->get()
            ->keyBy('key');
        return view('pages.profile.school_history', compact('settings'));
    }

    public function school_curriculum()
    {
        $settings = DB::table('settings')
            ->whereIn('key', ['kurikulum_sekolah'])
            ->get()
            ->keyBy('key');
        return view('pages.curriculum.school_curriculum', compact('settings'));
    }

    public function contact()
    {
        $settings = DB::table('settings')
            ->whereIn('key', ['contact_alamat', 'contact_telp', 'contact_email', 'contact_jam_kerja'])
            ->get()
            ->keyBy('key');
        return view('pages.contact.contact', compact('settings'));
    }
}
