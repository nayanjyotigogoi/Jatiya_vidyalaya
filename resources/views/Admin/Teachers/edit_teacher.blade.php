@extends('layouts.admin.admin_app')

@section('content')
    <div class="container">
        <main id="main" class="main">
            <section class="section">
                <h2>Edit Teacher</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('teachers.update', ['teacher' => $teacher->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>First Name</label>
                        <input type="text" name="first_name" class="form-control" value="{{ $teacher->first_name }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Last Name</label>
                        <input type="text" name="last_name" class="form-control" value="{{ $teacher->last_name }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control" value="{{ $teacher->subject }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Contact</label>
                        <input type="text" name="contact" class="form-control" value="{{ $teacher->contact }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $teacher->email }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" value="{{ $teacher->address }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Profile Photo</label>
                        <input type="file" name="photo" class="form-control" accept="image/*">
                        @if($teacher->photo)
                            <div class="mt-2">
                                <img src="{{ asset('uploads/' . $teacher->photo) }}" alt="Teacher Photo" width="100">
                            </div>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Update Teacher</button>
                </form>
            </section>
        </main>
    </div>
@endsection
