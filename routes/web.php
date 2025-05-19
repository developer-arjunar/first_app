<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/student/all', function() {
//     return view('student.index');
// });

Route::get('/student/allStudents', [StudentController::class, 'index']);
Route::get('/student/create', [StudentController::class, 'createStudent']);
