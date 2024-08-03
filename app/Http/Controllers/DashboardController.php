<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
class DashboardController extends Controller
{
    public function index()
    {
        // Fetch necessary data for the dashboard
        // Example: $employees = Employee::all();
        
        // Return the dashboard view with data
        return view('dashboard', [
            // 'employees' => $employees,
        ]);
    }
    public function attendance()
{
    // Retrieve attendance records for the logged-in user
    $attendances = Attendance::where('user_id', auth()->id())->orderBy('date', 'desc')->paginate(10);
    
    return view('dashboard.attendance', compact('attendances'));
}
}
