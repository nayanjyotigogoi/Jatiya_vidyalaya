<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Caption</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($images as $image)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @if(file_exists(public_path('uploads/gallery/' . basename($image->image_path))))
                        <img src="{{ asset('uploads/gallery/' . basename($image->image_path)) }}" width="50" height="50"
                            class="rounded">
                    @else
                        <span class="text-danger">Image not found</span>
                    @endif
                </td>

                <td>{{ $image->caption }}</td>
                <td>
                    <!-- Edit Button -->
                    <a href="{{ route('gallery.edit', $image->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <!-- Delete Button -->
                    <form action="{{ route('gallery.destroy', $image->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>