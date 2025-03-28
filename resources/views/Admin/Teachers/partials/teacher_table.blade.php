<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($teachers as $teacher)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @if($teacher->photo)
                        <img src="{{ asset('uploads/' . $teacher->photo) }}" alt="Teacher Photo" width="50" height="50" class="rounded-circle">
                    @else
                        <img src="{{ asset('images/default-avatar.png') }}" alt="Default Photo" width="50" height="50" class="rounded-circle">
                    @endif
                </td>
                <td>{{ $teacher->first_name }} {{ $teacher->last_name }}</td>
                <td>{{ $teacher->subject }}</td>
                <td>{{ $teacher->contact }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->address }}</td>
                <td>
                    <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
