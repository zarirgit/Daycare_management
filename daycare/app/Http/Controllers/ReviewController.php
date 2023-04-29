<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
    $reviews = Review::all();
    $avgRating = $reviews->avg('rating');

    return view('home', compact('reviews', 'avgRating'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required',
        ]);

        $review = new Review();
        $review->name = $request->name;
        $review->email = $request->email;
        $review->rating = $request->rating;
        $review->comment = $request->comment;
        $review->save();

        return redirect()->back()->with('success', 'Thank you for your review!');
    }
}