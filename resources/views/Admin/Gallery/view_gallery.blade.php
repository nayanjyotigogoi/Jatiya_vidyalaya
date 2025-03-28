@extends('layouts.admin.admin_app')

@section('content')
<div class="container">
    <main id="main" class="main">
        <section class="section">
            <h2>Gallery</h2>
            <a href="{{ route('gallery.create') }}" class="btn btn-primary mb-3">Add Image</a>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

           <!-- Table -->
           <div id="directorProfilesTable">
                    @include('Admin.Gallery.partials.gallery_table', ['images' => $images])

                </div>
        </section>
    </main>
</div>
@endsection
