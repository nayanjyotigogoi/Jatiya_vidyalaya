@extends('layouts.admin.admin_app')

@section('content')
    <div class="container">
        <main id="main" class="main">
            <section class="section">
                <h2>Edit Student</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('students.update', ['id' => $student->id]) }}" method="POST" enctype="multipart/form-data">

                <!-- <form action="{{ route('students.update', $student->id) }}" method="POST"  enctype="multipart/form-data"> -->
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>First Name</label>
                        <input type="text" name="first_name" class="form-control" value="{{ $student->first_name }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label>Last Name</label>
                        <input type="text" name="last_name" class="form-control" value="{{ $student->last_name }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" class="form-control" value="{{ $student->dob }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Gender</label>
                        <select name="gender" class="form-control">
                            <option value="Male" {{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Contact</label>
                        <input type="text" name="contact" class="form-control" value="{{ $student->contact }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" value="{{ $student->address }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Class</label>
                        <input type="text" name="class" class="form-control" value="{{ $student->class }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Section</label>
                        <input type="text" name="section" class="form-control" value="{{ $student->section }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Roll Number</label>
                        <input type="text" name="roll_number" class="form-control" value="{{ $student->roll_number }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label>Marks (JSON Format)</label>
                        <input type="text" name="marks" class="form-control" value="{{ $student->marks }}"
                            placeholder='{"Maths": 90, "Science": 85}'>
                    </div>

                    <div class="mb-3">
                        <label>Grade</label>
                        <input type="text" name="grade" class="form-control" value="{{ $student->grade }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update Student</button>
                </form>
            </section>
        </main>
    </div>
@endsection