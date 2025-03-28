@extends('layouts.admin.admin_app')

@section('content')
    <div class="container">
        <main id="main" class="main">
            <section class="section">
                <h2>Add New Student</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('students.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>First Name</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Last Name</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Gender</label>
                        <select name="gender" class="form-control">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Contact</label>
                        <input type="text" name="contact" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Class</label>
                        <input type="text" name="class" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Section</label>
                        <input type="text" name="section" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Roll Number</label>
                        <input type="text" name="roll_number" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Marks (JSON Format)</label>
                        <input type="text" name="marks" class="form-control" placeholder='{"Maths": 90, "Science": 85}'>
                    </div>
                    <div class="mb-3">
                        <label>Grade</label>
                        <input type="text" name="grade" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Add Student</button>
                </form>
            </section>
        </main>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: "{{ session('success') }}",
                    showConfirmButton: false,
                    timer: 3000
                });
            @endif
        });
    </script>
@endsection
