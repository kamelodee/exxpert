<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.tasks.index');
    }
    public function create()
    {
        return view('dashboard.tasks.create');
    }

    public function manage_bidder()
    {
        return view('dashboard.tasks.manage-bidder');
    }
    public function active_bids()
    {
        return view('dashboard.tasks.manage-bidder');
    }
}
