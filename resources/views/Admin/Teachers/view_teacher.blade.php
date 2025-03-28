@extends('layouts.admin.admin_app')

@section('content')
    <div class="container">
        <main id="main" class="main">
            <section class="section">
                <h2 class="mb-4">Teacher List</h2>
                <a href="{{ route('teachers.create') }}" class="btn btn-primary mb-3">Add New Teacher</a>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <!-- Table -->
                <div id="directorProfilesTable">
                    @include('Admin.Teachers.partials.teacher_table', ['teachers' => $teachers])

                </div>
            </section>
        </main>
    </div>
@endsection