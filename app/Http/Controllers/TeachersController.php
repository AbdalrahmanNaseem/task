<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use App\Http\Requests\StoreTeachersRequest;
use App\Http\Requests\UpdateTeachersRequest;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::with('subject')->get();
        // dd($teachers);
        return view('teacher.index', compact('teachers'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::all();
        $subjects = Subject::all();
        return view('teacher.create', compact('teachers', 'subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {




        $teacher = Teacher::create([
            'teacher' => $request['name'],
            'subject' => $request['subject_id']
        ]);

        $subjectNames = $request->input('subject_name');

        return redirect()->route('Teachers.index');

        // dd($request->all());
        //    
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teachers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teachers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeachersRequest $request, Teacher $teachers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teachers)
    {
        //
    }
}
