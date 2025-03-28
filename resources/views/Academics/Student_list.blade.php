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

    <!-- Search Section -->
    <section class="search-section" style="margin-bottom: 30px;">
        <div class="container">
            <h3 style="margin-bottom: 10px;">Search Students</h3>
            <input type="text" id="searchInput" placeholder="Search by name, marks, roll no, section..."
                style="padding: 10px; width: 100%; border: 1px solid #ccc; border-radius: 5px;">
        </div>
    </section>

    <!-- Search Results Section -->
    <section id="searchResults" style="display: none; margin-bottom: 40px;">
        <div class="container">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <h3 style="margin-bottom: 20px;">Search Results</h3>
                <button id="clearSearch"
                    style="padding: 8px 16px; background: #dc3545; color: white; border: none; border-radius: 5px; cursor: pointer;">
                    Clear Search
                </button>
            </div>

            <div id="resultContainer"
                style="display: grid; grid-template-columns: repeat(auto-fill, minmax(270px, 1fr)); gap: 20px;">
                <div class="student-card"
                    style="border-radius: 12px; border: 1px solid #e0e0e0; background-color: #f9f9f9; padding: 20px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);">
                    <h4 style="margin-bottom: 10px; color: #2c3e50;">Student Name</h4>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 15px; color: #555;">
                        <li><strong>Roll No:</strong> XXX</li>
                        <li><strong>Section:</strong> YYY</li>
                        <li><strong>Marks:</strong> ZZZ</li>
                        <li><strong>Division:</strong> Star/Distinction/First</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>


    <!-- Student Grade Page -->
    <section class="student-grade">
        <div class="container">
            <h2 class="page-title">Student Grades</h2>

            <!-- Tabs -->
            <div class="tabs">
                <button class="tab-btn active" data-tab="all">📋 All</button>
                <button class="tab-btn " data-tab="star">⭐ Star</button>
                <button class="tab-btn" data-tab="distinction_tab">🏅 Distinction</button>

                <button class="tab-btn" data-tab="first">🥇 First Division</button>

            </div>

            <!-- Tab Contents -->
            <div class="tab-content " id="star">
                <h3>Star Students</h3>
                <div class="table-responsive">
                    <table class="student-table">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th>Roll Number</th>
                                <th>Marks</th>
                                <th>Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($starStudents as $student)
                                <tr>
                                    <td>{{ $student->first_name }}</td>
                                    <td>{{ $student->last_name }}</td>
                                    <td>{{ $student->dob }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->contact }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->class }}</td>
                                    <td>{{ $student->section }}</td>
                                    <td>{{ $student->roll_number }}</td>
                                    <td>{{ $student->marks }}</td>
                                    <td>Star</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-content" id="distinction_tab">
                <h3>Distinction Students</h3>
                <div class="table-responsive">
                    <table class="student-table">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th>Roll Number</th>
                                <th>Marks</th>
                                <th>Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($distinctionStudents as $student)
                                <tr>
                                    <td>{{ $student->first_name }}</td>
                                    <td>{{ $student->last_name }}</td>
                                    <td>{{ $student->dob }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->contact }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->class }}</td>
                                    <td>{{ $student->section }}</td>
                                    <td>{{ $student->roll_number }}</td>
                                    <td>{{ $student->marks }}</td>
                                    <td>Distinction</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-content" id="first">
                <h3>First Division Students</h3>
                <div class="table-responsive">
                    <table class="student-table">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th>Roll Number</th>
                                <th>Marks</th>
                                <th>Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($starStudents as $student)
                                <tr>
                                    <td>{{ $student->first_name }}</td>
                                    <td>{{ $student->last_name }}</td>
                                    <td>{{ $student->dob }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->contact }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->class }}</td>
                                    <td>{{ $student->section }}</td>
                                    <td>{{ $student->roll_number }}</td>
                                    <td>{{ $student->marks }}</td>
                                    <td>Star</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-content active" id="all">
                <h3>All Students</h3>
                <div class="table-responsive">
                    <table class="student-table">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th>Roll Number</th>
                                <th>Marks</th>
                                <th>Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->first_name }}</td>
                                    <td>{{ $student->last_name }}</td>
                                    <td>{{ $student->dob }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->contact }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->class }}</td>
                                    <td>{{ $student->section }}</td>
                                    <td>{{ $student->roll_number }}</td>
                                    <td>{{ $student->marks }}</td>
                                    <td>
                                        @if($student->marks >= 510)
                                            Star
                                        @elseif($student->marks >= 400)
                                            Distinction
                                        @elseif($student->marks >= 300)
                                            First Division
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
@endsection