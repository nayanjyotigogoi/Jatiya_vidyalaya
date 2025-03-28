@extends('layouts.app')
@section('content')
  <!-- Hero Section -->
    <section class="about-hero-section">
        <div class="about-section-container">
            <div class="about-hero-content">
                <div class="about-breadcrumb">
                    <a href="/">Home</a> > <span>About Us</span>
                </div>
                <h1>ABOUT US</h1>
            </div>
        </div>
        <div class="about-hero-shapes">
            <div class="about-shape about-shape-1"></div>
            <div class="about-shape about-shape-2"></div>
            <div class="about-shape about-shape-3"></div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-about-section">
        <div class="container">
            <div class="about-about-content">
                <div class="about-about-left">
                    <div class="about-about-image-container">
                        <img src="css/images/about_4.png" alt="Student with books" class="main-image">
                        <div class="about-experience-badge">
                            <span class="about-number">35+</span>
                            <span class="about-text">Years Experience</span>
                        </div>
                        <!-- <div class="about-secondary-image-container">
                            <img src="css/images/about_2.jpg" alt="Students discussing" class="about-secondary-image">
                        </div> -->
                        <div class="about-shape about-shape-1"></div>
                        <div class="about-shape about-shape-2"></div>
                    </div>
                </div>
                <div class="about-about-right">
                    <div class="section-tag">ABOUT US</div>
                    <h2><span class="highlight">জাতীয় বিদ্যালয়:</span> A Legacy of Excellence in Higher Education Since 1982</h2>
                    <p>Established in 1982, জাতীয় বিদ্যালয় is a premier higher education institution in Dhemaji. Initially offering Commerce, it expanded to include the Arts stream in 1989, continuing its commitment to academic excellence and holistic development.</p>
                    
                    <div class="about-mission-vision">
                        <div class="about-mission">
                            <h3>OUR MISSION</h3>
                            <p>To create a nurturing learning environment where students develop knowledge, values, and skills to become responsible and confident individuals.</p>
                        </div>
                        <div class="about-vision">
                            <h3>OUR VISION</h3>
                            <p>To provide quality education, inspire lifelong learning, and encourage holistic development through innovative teaching and a supportive community.</p>
                        </div>
                    </div>
                    
                    <a href="#" class="btn btn-primary">Admission Open <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="about-stats-section">
        <div class="container">
            <div class="about-stats-container">
                <div class="about-stat-item">
                    <div class="about-stat-icon"><i class="fas fa-user-tie"></i></div>
                    <div class="about-stat-content">
                        <h3>3K+</h3>
                        <p>Successful Trainers</p>
                    </div>
                </div>
                <div class="about-stat-item">
                    <div class="about-stat-icon"><i class="fas fa-book"></i></div>
                    <div class="about-stat-content">
                        <h3>15K+</h3>
                        <p>Courses Completed</p>
                    </div>
                </div>
                <div class="about-stat-item">
                    <div class="about-stat-icon"><i class="fas fa-user-graduate"></i></div>
                    <div class="about-stat-content">
                        <h3>97K+</h3>
                        <p>Satisfaction Rate</p>
                    </div>
                </div>
                <div class="about-stat-item">
                    <div class="about-stat-icon"><i class="fas fa-users"></i></div>
                    <div class="about-stat-content">
                        <h3>102K+</h3>
                        <p>Students Community</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team">
        <div class="container team-container">
            <div class="section-subtitle text-center">Our Team</div>
            <h2 class="section-title text-center">Meet Our Instructors</h2>
            <div class="team-wrapper">
                <div class="team-grid" id="teamGrid">
                    @foreach($teachers as $teacher)
                        <div class="team-card">
                            <div class="team-img-container">
                                <img src="{{ asset('uploads/' . $teacher->photo) }}"
                                    alt="{{ $teacher->first_name }} {{ $teacher->last_name }}" class="team-img"
                                    onerror="this.onerror=null;this.src='{{ asset('images/no-image.webp') }}';">
                                <!-- <div class="team-social">
                                    <i class="fas fa-plus"></i>
                                </div> -->
                            </div>
                            <div class="team-info">
                                <h4>{{ $teacher->first_name }} {{ $teacher->last_name }}</h4>
                                <p>{{ $teacher->subject }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="team-nav">
                <div class="team-nav-btn" id="prevBtn">
                    <i class="fas fa-arrow-left"></i>
                </div>
                <div class="team-nav-btn" id="nextBtn">
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
        <img src="{{ asset('css/images/decoration_2.png') }}" alt="Decoration" class="decoration decoration-1">
    </section>

@endsection


