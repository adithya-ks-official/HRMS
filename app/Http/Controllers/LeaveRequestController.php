<?php

namespace App\Http\Controllers;
use App\Models\LeaveRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\LeaveRequestController;

class LeaveRequestController extends Controller
{
    public function index()
    {
        // Retrieve all leave requests from the database
        $leaveRequests = LeaveRequest::all();

        // Return the view with the leave requests
        return view('leave_requests.index', compact('leaveRequests'));
    }

    public function create()
    {
        // Return the view for creating a new leave request
        return view('leave_requests.create');
        return view('leave.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'user_id' =>'required|string',
            'employee_name' => 'required|string', 
            'email' => 'required|email',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'reason' => 'required|string',
        ]);

        LeaveRequest::create([
            'user_id' =>$validatedData['user_id'],
            'employee_name' => $validatedData['employee_name'],
            'email' => $validatedData['email'],
            'start_date' => $validatedData['start_date'],
            'end_date' => $validatedData['end_date'],
            'reason' => $validatedData['reason'],
            // You can also assign user_id here if you have an authenticated user
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Leave request submitted successfully.');


        return redirect()->route('leave_requests.index')->with('success', 'Leave request created successfully.');
    }
    
    // Add other methods for editing, updating, and deleting leave requests as needed
    
}
