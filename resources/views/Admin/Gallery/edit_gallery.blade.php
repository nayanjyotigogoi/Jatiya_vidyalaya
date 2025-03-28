@extends('layouts.admin.admin_app')

@section('content')
    <div class="container">
        <main id="main" class="main">
            <section class="section">
                <h2>Edit Image</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>Current Image</label><br>
                        @if(file_exists(public_path('uploads/gallery/' . basename($gallery->image_path))))
                            <img src="{{ asset('uploads/gallery/' . basename($gallery->image_path)) }}" width="150">
                        @else
                            <span class="text-danger">Image not found</span>
                        @endif
                    </div>


                    <div class="mb-3">
                        <label>New Image (Optional)</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Caption</label>
                        <input type="text" name="caption" class="form-control"
                            value="{{ old('caption', $gallery->caption) }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </section>
        </main>
    </div>
@endsection