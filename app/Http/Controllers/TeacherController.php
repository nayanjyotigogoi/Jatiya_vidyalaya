<?php

// app/Http/Controllers/TeacherController.php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // Show all teachers
    public function index() {
        $teachers = Teacher::all();
        return view('Admin.Teachers.view_teacher', compact('teachers'));
    }

    // Show create form
    public function create() {
        return view('Admin.Teachers.add_teacher');
    }

    public function store(Request $request) {
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'subject' => 'required|string|max:100',
            'contact' => 'required|string|max:15',
            'email' => 'required|email|unique:teachers,email',
            'address' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
    
            // MIME type validation
            // $finfo = new \finfo(FILEINFO_MIME_TYPE);
            // $mime_type = $finfo->file($file->getPathname());
    
            // if (substr_count($file->getClientOriginalName(), '.') > 1) {
            //     return redirect()->back()->with('error', 'Invalid file name.');
            // }
    
            // if (!in_array($mime_type, ['image/png', 'image/jpeg'])) {
            //     return redirect()->back()->with('error', 'Invalid file type. Only JPG and PNG allowed.');
            // }
    
            $extension = $file->getClientOriginalExtension();
            if (!in_array($extension, ['jpg', 'jpeg', 'png'])) {
                return redirect()->back()->with('error', 'Invalid file extension.');
            }
    
            // Generate unique file name
            $fileName = date('dmY_His') . '.' . $extension;
    
            // Move file to public/uploads/teachers/
            $file->move(public_path('uploads/teachers'), $fileName);
            $photoPath = 'teachers/' . $fileName;
        }
    
        Teacher::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'subject' => $request->subject,
            'contact' => $request->contact,
            'email' => $request->email,
            'address' => $request->address,
            'photo' => $photoPath, // Store path in DB
        ]);
    
        return redirect()->route('teachers.index')->with('success', 'Teacher added successfully!');
    }
    
    
    // Show edit form
    public function edit(Teacher $teacher) {
        return view('Admin.Teachers.edit_teacher', compact('teacher'));
    }

    // Update teacher record
    public function update(Request $request, Teacher $teacher) {
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'subject' => 'required|string|max:100',
            'contact' => 'required|string|max:15',
            'email' => 'required|email|unique:teachers,email,' . $teacher->id,
            'address' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        $photoPath = $teacher->photo; // Keep existing photo unless changed
    
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
    
            // MIME type validation
            // $finfo = new \finfo(FILEINFO_MIME_TYPE);
            // $mime_type = $finfo->file($file->getPathname());
    
            // if (substr_count($file->getClientOriginalName(), '.') > 1) {
            //     return redirect()->back()->with('error', 'Invalid file name.');
            // }
    
            // if (!in_array($mime_type, ['image/png', 'image/jpeg'])) {
            //     return redirect()->back()->with('error', 'Invalid file type. Only JPG and PNG allowed.');
            // }
    
            $extension = $file->getClientOriginalExtension();
            if (!in_array($extension, ['jpg', 'jpeg', 'png'])) {
                return redirect()->back()->with('error', 'Invalid file extension.');
            }
    
            // Delete old photo if exists
            // if ($teacher->photo && file_exists(public_path($teacher->photo))) {
            //     unlink(public_path($teacher->photo));
            // }
    
            // Generate new file name
            $fileName = date('dmY_His') . '.' . $extension;
    
            // Move file to public/uploads/teachers/
            $file->move(public_path('uploads/teachers'), $fileName);
            $photoPath = 'teachers/' . $fileName;
        }
    
        $teacher->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'subject' => $request->subject,
            'contact' => $request->contact,
            'email' => $request->email,
            'address' => $request->address,
            'photo' => $photoPath, // Store updated photo path
        ]);
    
        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully!');
    }
    
    

    // Delete teacher
    public function destroy(Teacher $teacher) {
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully!');
    }
}
