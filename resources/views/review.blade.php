@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h2 class="mb-4 text-center">Write a Review</h2>

            <form action="{{ route('reviews.store') }}" method="POST">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
                </div>

                <!-- Role -->
                <div class="mb-3">
                    <label for="role" class="form-label">I am a</label>
                    <select class="form-select" id="role" name="role" required onchange="toggleOtherRole()">
                        <option value="">-- Select --</option>
                        <option value="Parent">Parent</option>
                        <option value="Student">Student</option>
                        <option value="Teacher">Teacher</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <!-- Other Role Input -->
                <div class="mb-3" id="otherRoleBox" style="display: none;">
                    <label for="other_role" class="form-label">Please specify</label>
                    <input type="text" class="form-control" id="other_role" name="other_role" placeholder="Enter your role if not listed">
                </div>

                <!-- Rating -->
                <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <select class="form-select" id="rating" name="rating" required>
                        <option value="">-- Select Rating --</option>
                        <option value="5">⭐⭐⭐⭐⭐ (5 - Excellent)</option>
                        <option value="4">⭐⭐⭐⭐ (4 - Good)</option>
                        <option value="3">⭐⭐⭐ (3 - Average)</option>
                        <option value="2">⭐⭐ (2 - Below Average)</option>
                        <option value="1">⭐ (1 - Poor)</option>
                    </select>
                </div>

                <!-- Review -->
                <div class="mb-3">
                    <label for="review" class="form-label">Your Review</label>
                    <textarea class="form-control" id="review" name="review" rows="5" placeholder="Write your honest feedback" required></textarea>
                </div>

                <!-- Submit -->
                <div class="text-center">
                    <button type="submit" class="btn btn-success px-4">Submit Review</button>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Show/Hide "Other" Input -->
<script>
    function toggleOtherRole() {
        const role = document.getElementById('role').value;
        const otherBox = document.getElementById('otherRoleBox');
        if (role === 'Other') {
            otherBox.style.display = 'block';
            document.getElementById('other_role').required = true;
        } else {
            otherBox.style.display = 'none';
            document.getElementById('other_role').required = false;
        }
    }
</script>

<!-- SweetAlert Success Message -->
@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Thank you!',
        text: '{{ session('success') }}',
        confirmButtonColor: '#28a745'
    });
</script>
@endif

@endsection
