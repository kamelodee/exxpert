<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.jobs.index');
    }
    public function create()
    {
        return view('dashboard.jobs.create');
    }


    public function manage_candidate()
    {
        return view('dashboard.jobs.managecandidate');
    }
}
