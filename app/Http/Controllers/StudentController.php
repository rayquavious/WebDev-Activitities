<?php

namespace App\Http\Controllers;

use App\Models\Students;

class StudentController extends Controller
{
    public function index()
    {
        $students = Students::all();
        return view('students.index', compact('students'));
    }
}

