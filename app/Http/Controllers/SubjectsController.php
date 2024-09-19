<?php

namespace App\Http\Controllers;

use App\Models\Subjects;
use App\Http\Requests\StoreSubjectsRequest;
use App\Http\Requests\UpdateSubjectsRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatestudentRequest;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subjects::all();
        return view('subject.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Subjects::create([
            'name' => $request['user_name'],

        ]);
        return redirect()->route('subject.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subjects $subjects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subjects $subject)
    {
        return view('subject.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subjects $subject)
    {
        $subject->update([

            'name' => $request->input('New_user_name'),

        ]);

        return redirect()->route('subject.index');

        //
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subjects $subject)
    {


        if ($subject) {
            $subject->delete();
        }

        return redirect()->route('subject.index');
        //
    }
}
