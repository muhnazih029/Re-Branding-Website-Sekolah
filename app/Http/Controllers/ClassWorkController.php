<?php

namespace App\Http\Controllers;

use App\Models\ClassWork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ClassWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classworks = DB::table('class_works')
            ->leftJoin('student_classes', 'class_works.student_class_id', '=', 'student_classes.id')
            ->select('class_works.*', 'student_classes.class_name')
            ->get();
        return view('pages.curriculum.homework', compact('classworks'));
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
    public function show($id)
    {
        $classworks = DB::table('class_works')
            ->leftJoin('student_classes', 'class_works.student_class_id', '=', 'student_classes.id')
            ->select('class_works.*', 'student_classes.class_name as class_name')
            ->where('class_works.id', $id)
            ->get();
        return view('pages.curriculum.ex_homework', compact('classworks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClassWork $classWork)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClassWork $classWork)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClassWork $classWork)
    {
        //
    }
}
