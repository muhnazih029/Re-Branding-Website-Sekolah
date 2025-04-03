<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\SchoolOperationalAssistance;

class SchoolOperationalAssistanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $currentYear = date('Y');
        $years = range($currentYear, $currentYear - 5);
        $year = $request->input('year', $currentYear);

        $assistances = DB::table('school_operational_assistances')
            ->whereYear('date', $year)
            ->select(
                DB::raw("strftime('%m', date) as month"),
                DB::raw("SUM(receipt) as total_receipt"),
                DB::raw("SUM(expenditure) as total_expenditure"),
                DB::raw("SUM(bank_balance) as total_balance")
            )
            ->whereRaw("strftime('%Y', date) = ?", [$year]) // Filter berdasarkan tahun
            ->groupBy(DB::raw("strftime('%m', date)"))
            ->orderBy(DB::raw("strftime('%m', date)"))
            ->get();

        return view('pages.profile.bos', compact('assistances', 'year', 'years'));
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
