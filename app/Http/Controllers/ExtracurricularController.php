<?php

namespace App\Http\Controllers;

use App\Models\Extracurriculars;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.profile.extracurriculars');
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
    public function show(Extracurriculars $extracurriculars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Extracurriculars $extracurriculars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Extracurriculars $extracurriculars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Extracurriculars $extracurriculars)
    {
        //
    }
}
