<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\TeachersController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//show.studentsshow.students
Route::get('students', [StudentController::class, 'index'])->name('students.index');

Route::get('student', [StudentController::class, 'create'])->name('student.create');
Route::post('student', [StudentController::class, 'store'])->name('student.store');

Route::get('student/{student}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('student/{student}', [StudentController::class, 'update'])->name('student.update');

Route::delete('student/{student}', [StudentController::class, 'destroy'])->name('student.delete');

/////////////////////////////////////////////////
Route::get('subjects', [SubjectsController::class, 'index'])->name('subject.index');
Route::get('subject', [SubjectsController::class, 'create'])->name('subject.create');
Route::post('subject', [SubjectsController::class, 'store'])->name('subject.store');
Route::get('subject/{subject}', [SubjectsController::class, 'edit'])->name('subject.edit');
Route::post('/subject/{subject}', [SubjectsController::class, 'update'])->name('subject.update');
Route::delete('students/{subject}', [SubjectsController::class, 'destroy'])->name('subject.delete');

// ///////////////////////////////////////////////
Route::get('Teachers', [TeachersController::class, 'index'])->name('Teachers.index');
Route::get('Teacher', [TeachersController::class, 'create'])->name('Teacher.create');
Route::post('Teacher', [TeachersController::class, 'store'])->name('Teacher.store');
