@extends('layouts.admin.admin_app')

@section('content')
    <div class="container">
        <main id="main" class="main">
            <section class="section">
                <h2 class="mb-4">Student List</h2>
                <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add New Student</a>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif


                <!-- Table -->
                <div id="directorProfilesTable">
                    @include('Admin.Students.partials.student_table', ['students' => $students])

                </div>
    </div>
    </section>
    </main>
@endsection