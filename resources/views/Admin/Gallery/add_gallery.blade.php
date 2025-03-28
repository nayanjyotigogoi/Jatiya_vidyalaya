@extends('layouts.admin.admin_app')

@section('content')
<div class="container">
    <main id="main" class="main">
        <section class="section">
            <h2>Add Image</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Caption</label>
                    <input type="text" name="caption" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </section>
    </main>
</div>
@endsection
