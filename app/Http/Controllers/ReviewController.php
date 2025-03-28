<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string',
            'other_role' => 'nullable|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string'
        ]);

        $review = new Review();
        $review->name = $request->name;
        $review->role = $request->role;
        $review->other_role = $request->role === 'Other' ? $request->other_role : null;
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->save();

        return redirect()->back()->with('success', 'Thank you! Your review has been submitted.');
    }
}
