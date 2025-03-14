<?php

namespace App\Http\Controllers;

use App\Models\SchoolOperationalAssistance;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SchoolOperationalAssistanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.profile.bos');
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
    public function show(SchoolOperationalAssistance $schoolOperationalAssistance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SchoolOperationalAssistance $schoolOperationalAssistance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SchoolOperationalAssistance $schoolOperationalAssistance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SchoolOperationalAssistance $schoolOperationalAssistance)
    {
        //
    }
}
