<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function index()
    {
        // You can add logic here to fetch leave-related data or perform actions
        return view('dashboard.leave');
    }
}
