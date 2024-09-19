<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//show.studentsshow.students
Route::get('students', [StudentController::class, 'index'])->name('students.index');

Route::get('student',[StudentController::class, 'create'])->name('student.create');
Route::post('student', [StudentController::class, 'store'])->name('student.store');

Route::get('student/{student}',[StudentController::class,'edit'])->name('student.edit');
Route::post('student/{student}', [StudentController::class, 'update'])->name('student.update');

Route::delete('student/{student}', [StudentController::class, 'destroy'])->name('student.delete');
