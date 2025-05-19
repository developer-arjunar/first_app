<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        // return "Success";
        return view('student.index');
    }

    public function createStudent() {
        return view('student.studentForm');
    }
}
