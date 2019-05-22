<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class studentController extends Controller
{
    public function index()
    {
      $students = Student::all();
      return view('index')->with('students', $students);
    }
}
