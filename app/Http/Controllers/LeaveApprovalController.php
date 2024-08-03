<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaveApprovalController extends Controller
{
    public function index()
    {
        // Retrieve all leave requests from the database that need approval
        $leaveRequests = LeaveRequest::where('status', 'pending')->get();

        // Return the view with the leave requests requiring approval
        return view('leave_approvals.index', compact('leaveRequests'));
    }

    public function approve(LeaveRequest $leaveRequest)
    {
        // Approve the leave request
        $leaveRequest->status = 'approved';
        $leaveRequest->save();

        // Redirect back to the index page with a success message
        return redirect()->route('leave_approvals.index')->with('success', 'Leave request approved successfully.');
    }

    public function reject(LeaveRequest $leaveRequest)
    {
        // Reject the leave request
        $leaveRequest->status = 'rejected';
        $leaveRequest->save();

        // Redirect back to the index page with a success message
        return redirect()->route('leave_approvals.index')->with('success', 'Leave request rejected successfully.');
    }
}
