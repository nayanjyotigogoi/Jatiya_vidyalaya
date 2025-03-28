@extends("layouts.admin.admin_app")

@stack('styles')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

      

    </main><!-- End #main -->

@endsection

@push('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endpush