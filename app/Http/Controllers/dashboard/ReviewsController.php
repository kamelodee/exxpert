<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.reviews.index');
    }
}
