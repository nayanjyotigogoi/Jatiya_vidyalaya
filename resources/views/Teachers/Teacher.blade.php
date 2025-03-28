@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="shape shape-dots"></div>
        <div class="shape shape-wave"></div>
        <div class="shape shape-star"></div>
        <div class="shape shape-circle"></div>
        <div class="about-section-container">
            <div class="about-hero-content">
                <div class="about-breadcrumb">
                    <a href="/">Home</a> > <span>Teachers</span>
                </div>
                <h1>Faculty Members</h1>
            </div>
        </div>
    </section>

    <!-- Instructors Section -->
    <section class="teacher-instructors">
        <div class="container">
            <div class="section-tag">TEACHER</div>
            <h2>Meet Our Instructors</h2>

            <div class="teacher-instructor-grid">
                @foreach($teachers as $teacher)
                    <div class="teacher-instructor-card">
                        <div class="teacher-instructor-image">
                            <img src="{{ asset('uploads/' . $teacher->photo) }}" 
                                 alt="{{ $teacher->first_name }} {{ $teacher->last_name }}" 
                                 onerror="this.onerror=null;this.src='{{ asset('images/profile.jpeg') }}';">
                            <div class="teacher-share-icon">
                                <i class="fas fa-share-alt"></i>
                            </div>
                        </div>
                        <div class="teacher-instructor-info">
                            <h3>{{ $teacher->first_name }} {{ $teacher->last_name }}</h3>
                            <p>{{ $teacher->subject }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
