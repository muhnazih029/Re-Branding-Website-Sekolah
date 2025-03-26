<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $students = Student::select('student_name', 'nisn', 'image')->with('student_class')->paginate(5);
        // $students = Student::select('students.*', 'student_classes.class_name', 'teachers.teacher_name')
        //     ->join('student_classes', 'students.student_class_id', '=', 'student_classes.id')
        //     ->join('teachers', 'student_classes.teacher_id', '=', 'teachers.id')
        //     ->get();
        // return view('pages.profile.detail', compact('students'));
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
        $class = DB::table('student_classes')
            ->leftJoin('teachers', 'student_classes.teacher_id', '=', 'teachers.id')
            ->select('student_classes.id', 'teachers.*')
            ->where('student_classes.id', $id)
            ->first();

        $students = DB::table('students')
            ->where('student_class_id', $id)
            ->get();

    return view('pages.profile.detail', compact('class', 'students'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
