<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ExtracurricularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $extracurriculars = DB::table("extracurriculars")
            ->select(
                "extracurriculars.id",
                "extracurriculars.extra_name",
                "extracurriculars.description",
                "extracurriculars.image",
            )
            ->orderBy('extracurriculars.extra_name')
            ->get();

        return view('pages.profile.extracurriculars', compact('extracurriculars'));
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
    public function show(Extracurricular $extracurriculars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Extracurricular $extracurriculars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Extracurricular $extracurriculars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Extracurricular $extracurriculars)
    {
        //
    }
}
