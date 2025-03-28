<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller {
    // Show all images
    public function index() {
        $images = Gallery::latest()->get();
        return view('Admin.Gallery.view_gallery', compact('images'));
    }

    // Show form to add image
    public function create() {
        return view('Admin.Gallery.add_gallery');
    }

    // Store image
    public function store(Request $request) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'caption' => 'nullable|string|max:255',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            // MIME type validation
            $finfo = new \finfo(FILEINFO_MIME_TYPE);
            $mime_type = $finfo->file($file->getPathname());

            if (substr_count($file->getClientOriginalName(), '.') > 1) {
                return redirect()->back()->with('error', 'Invalid file name.');
            }

            if (!in_array($mime_type, ['image/png', 'image/jpeg'])) {
                return redirect()->back()->with('error', 'Invalid file type. Only JPG and PNG allowed.');
            }

            $extension = $file->getClientOriginalExtension();
            if (!in_array($extension, ['jpg', 'jpeg', 'png'])) {
                return redirect()->back()->with('error', 'Invalid file extension.');
            }

            // Generate unique file name
            $fileName = date('dmY_His') . '.' . $extension;

            // Move file to public/uploads/gallery/
            $file->move(public_path('uploads/gallery'), $fileName);
            $imagePath = 'gallery/' . $fileName;
        }

        Gallery::create([
            'image_path' => $imagePath,
            'caption' => $request->caption,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Image added successfully!');
    }

    public function edit(Gallery $gallery) {
        return view('Admin.Gallery.edit_gallery', compact('gallery'));
    }
    
    public function update(Request $request, Gallery $gallery) {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'caption' => 'nullable|string|max:255',
        ]);
    
        $data = $request->only(['caption']);
    
        // Handling image upload if a new image is provided
        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // MIME type validation
            $finfo = new \finfo(FILEINFO_MIME_TYPE);
            $mime_type = $finfo->file($file->getPathname());
    
            if (substr_count($file->getClientOriginalName(), '.') > 1) {
                return redirect()->back()->with('error', 'Invalid file name.');
            }
    
            if (!in_array($mime_type, ['image/png', 'image/jpeg'])) {
                return redirect()->back()->with('error', 'Invalid file type. Only JPG and PNG allowed.');
            }
    
            $extension = $file->getClientOriginalExtension();
            if (!in_array($extension, ['jpg', 'jpeg', 'png'])) {
                return redirect()->back()->with('error', 'Invalid file extension.');
            }
    
            // Delete old image
            if ($gallery->image_path && file_exists(public_path($gallery->image_path))) {
                unlink(public_path($gallery->image_path));
            }
    
            // Generate new file name and move file
            $fileName = date('dmY_His') . '.' . $extension;
            $file->move(public_path('uploads/gallery'), $fileName);
            $data['image_path'] = 'gallery/' . $fileName;
        }
    
        $gallery->update($data);
    
        return redirect()->route('gallery.index')->with('success', 'Image updated successfully!');
    }
    

    // Delete image
    public function destroy(Gallery $gallery) {
        if ($gallery->image_path && file_exists(public_path($gallery->image_path))) {
            unlink(public_path($gallery->image_path));
        }

        $gallery->delete();
        return redirect()->route('gallery.index')->with('success', 'Image deleted successfully!');
    }
}
