@extends('layouts.app')

@section('content')
    <section class="about-hero-section">
        <div class="about-section-container">
            <div class="about-hero-content">
                <div class="about-breadcrumb">
                    <a href="/">Home</a> > <span>Academics</span>
                </div>
                <h1>Academic Performance</h1>
            </div>
        </div>
        <div class="about-hero-shapes">
            <div class="about-shape about-shape-1"></div>
            <div class="about-shape about-shape-2"></div>
            <div class="about-shape about-shape-3"></div>
        </div>
    </section>

    <section class="teacher-instructors">
        <div class="academic-container">

            <div class="academic-stats-grid">
                <div class="academic-stat-card">
                    <div class="academic-card-header blue">
                        <div class="academic-icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <h3>Total Appeared</h3>
                    </div>
                    <div class="academic-card-content">
                        <div class="academic-value" id="totalAppeared">0</div>
                        <p>Students who appeared for exams</p>
                    </div>
                </div>

                <div class="academic-stat-card">
                    <div class="academic-card-header green">
                        <div class="icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="m16 11 2 2 4-4"></path>
                            </svg>
                        </div>
                        <h3>Total Passed</h3>
                    </div>
                    <div class="academic-card-content">
                        <div class="academic-value" id="totalPassed">0</div>
                        <p>Students who successfully passed</p>
                    </div>
                </div>

                <div class="academic-stat-card">
                    <div class="academic-card-header purple">
                        <div class="academic-icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m7 12 3 3 7-7"></path>
                            </svg>
                        </div>
                        <h3>Pass Percentage</h3>
                    </div>
                    <div class="academic-card-content">
                        <div class="academic-value" id="passPercentage">0%</div>
                        <p>Overall pass rate</p>
                    </div>
                </div>

                <div class="academic-stat-card">
                    <div class="academic-card-header amber">
                        <div class="academic-icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="8" r="6"></circle>
                                <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path>
                            </svg>
                        </div>
                        <h3>Distinction</h3>
                    </div>
                    <div class="academic-card-content">
                        <div class="academic-value" id="distinction">0</div>
                        <p>Students who achieved distinction</p>
                    </div>
                </div>

                <div class="academic-stat-card">
                    <div class="academic-card-header orange">
                        <div class="academic-icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        </div>
                        <h3>Star Marks</h3>
                    </div>
                    <div class="academic-card-content">
                        <div class="academic-value" id="starMarks">0</div>
                        <p>Students who received star marks</p>
                    </div>
                </div>

                <div class="academic-stat-card">
                    <div class="academic-card-header teal">
                        <div class="academic-icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                        </div>
                        <h3>First Division</h3>
                    </div>
                    <div class="academic-card-content">
                        <div class="academic-value" id="firstDivision">0</div>
                        <p>Students who secured first division</p>
                    </div>
                </div>
            </div>

            <div class="academic-footer-content">
                <h2>Academic Excellence</h2>
                <p>Our institution maintains high academic standards through dedicated teaching, personalized attention, and
                    a supportive learning environment.</p>
            </div>
        </div>
    </section>
@endsection