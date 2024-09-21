<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorestudentRequest;
use App\Http\Requests\UpdatestudentRequest;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Subjects;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();

        return view('student.index', compact('students'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $subjects = Subject::all();
        return view('student.create', compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = Student::create([
            'name' => $request['name'],

            'email' => $request['email'],
            'phone' => $request['phone'],
        ]);
        if ($request->has('subjects')) {
            $student->subjects()->sync($request->input('subjects'));
        }

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $subjects = Subject::all();
        return view('student.edit', compact('student', 'subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        $student->update([
            'email' => $request->input('New_email'),
            'name' => $request->input('New_user_name'),
            'Phone' => $request->input('New_user_phone')
        ]);
        if ($request->has('subjects')) {
            $student->subjects()->sync($request->input('subjects'));
        }

        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        if ($student) {
            $student->delete();
        }

        return redirect()->route('students.index');
    }
}
