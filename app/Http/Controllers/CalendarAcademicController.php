<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalendarAcademic;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CalendarAcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $calendar = DB::table('calendar_academics')
            ->select('title', 'document', 'created_at')
            ->orderBy('created_at', 'desc')
            ->first();
        return view('pages.curriculum.calandar_academic', compact('calendar'));
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
    public function show(CalendarAcademic $calendarAcademic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CalendarAcademic $calendarAcademic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CalendarAcademic $calendarAcademic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CalendarAcademic $calendarAcademic)
    {
        //
    }
}
