<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Review;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        // Fetch all reviews
        $reviews = Review::latest()->get();
        // Fetch all teachers
        $teachers = Teacher::all(); // Fetch all teachers
        return view('index', compact('teachers', 'reviews')); // Pass data to the view
    }
    public function getAbout()
    {
        // dd('hello');
        $teachers = Teacher::all(); // Fetch all teachers
        return view('About-us.About-us', compact('teachers'));
    }


    public function getAcademics()
    {
        return view('Academics.Academic');
    }


    public function getteacher()
    {
        $teachers = Teacher::all(); // Fetch all teachers
        return view('Teachers.Teacher', compact('teachers')); // Pass data to the view
    }



    public function getContact()
    {
        return view('Contact-us.Contact-us');
    }

    public function writeReview(){
        return view('review');
    }

    


}
