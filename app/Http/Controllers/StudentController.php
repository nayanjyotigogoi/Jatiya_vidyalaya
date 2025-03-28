<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    // Show all students
    public function index()
    {
        $students = Student::all();
        return view('Admin.Students.view_student', compact('students'));
    }


    // Show create form
    public function create()
    {
        return view('Admin.Students.add_student');
    }

    // Store new student
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'contact' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'class' => 'required|string|max:50',
            'section' => 'required|string|max:10',
            'roll_number' => 'required|string|max:20|unique:students,roll_number',
            'marks' => 'nullable|string',
            'grade' => 'nullable|string|max:5',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student added successfully!');


    }

    // Show single student details
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    // Show edit form
    public function edit($id)
    {
        $student = Student::findOrFail($id); // Ensure student exists
        return view('Admin.Students.edit_student', compact('student'));
    }



    // Update student record
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id); // Retrieve student by ID

        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'contact' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'class' => 'required|string|max:50',
            'section' => 'required|string|max:10',
            'roll_number' => 'required|string|max:20|unique:students,roll_number,' . $id, // Exclude current student's roll number
            'marks' => 'nullable|string',
            'grade' => 'nullable|string|max:5',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }


    // Delete student
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }

    public function studentGrades()
    {
        $students = Student::all();

        // First Division: 300 to 399
        $firstDivisionStudents = $students->filter(function ($student) {
            return $student->marks >= 300 && $student->marks <= 399;
        });

        // Distinction: 400 to 509
        $distinctionStudents = $students->filter(function ($student) {
            return $student->marks >= 400 && $student->marks <= 509;
        });

        // Star: 510 to 600
        $starStudents = $students->filter(function ($student) {
            return $student->marks >= 510 && $student->marks <= 600;
        });


        return view('Academics.Student_list', compact('starStudents', 'distinctionStudents', 'firstDivisionStudents', 'students'));
    }


}
