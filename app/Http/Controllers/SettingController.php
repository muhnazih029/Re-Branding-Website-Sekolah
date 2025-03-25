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
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
