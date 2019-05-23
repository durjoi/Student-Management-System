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
    public function create()
    {
      return view('create');
    }
    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->name;
        $student->registration_id = $request->registration_id;
        $student->department_name = $request->department_name;
        $student->info = $request->info;
        $student->save();

        return redirect()->route('index');
    }
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->registration_id = $request->registration_id;
        $student->department_name = $request->department_name;
        $student->info = $request->info;
        $student->save();

        return redirect()->route('index');
    }
    public function edit($id)
    {

        $student = Student::find($id);
        return view('edit')->with('student', $student);
    }
    public function delete($id)
    {

        $student = Student::find($id);
        $student->delete();

        return redirect()->route('index');
    }
}
