<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return Student::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students',
            // add other fields validation
        ]);

        $student = Student::create($request->all());
        return response()->json($student, 201);
    }

    public function show(Student $student)
    {
        return $student;
    }

    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return response()->json($student);
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json(['message' => 'Student deleted']);
    }
}