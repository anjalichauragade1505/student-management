<?php

namespace App\Http\Controllers;

use App\Models\Student; // Import the Student model
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Display a listing of the students
    public function index()
    {
        $students = Student::all(); // Get all student records
        return view('students.index', compact('students')); // Pass the records to the index view
    }

    // Show the form for creating a new student
    public function create()
    {
        return view('students.create'); // Return the create view
    }

    // Store a newly created student in storage
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required',
        ]);

        // Create a new student record
        Student::create($request->all());

        // Redirect to the index route with a success message
        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    // Show the form for editing the specified student
    public function edit(Student $student)
    {
        return view('students.edit', compact('student')); // Pass the student record to the edit view
    }

    // Update the specified student in storage
    public function update(Request $request, Student $student)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        // Update the student record
        $student->update($request->all());

        // Redirect to the index route with a success message
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    // Remove the specified student from storage
    public function destroy(Student $student)
    {
        $student->delete(); // Delete the student record

        // Redirect to the index route with a success message
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}

