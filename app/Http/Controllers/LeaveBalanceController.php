<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaveBalanceController extends Controller
{
    public function index()
    {
        $leaveBalances = [
            'John Doe' => 15,
            'Jane Smith' => 20,
            // Add more users and balances as needed
        ];
        return view('leave_balances.index', compact('leaveBalances'));

        // Retrieve the leave balance for the authenticated user
        $user = auth()->user();
        $leaveBalance = $user->leaveBalance(); // Assuming leave balance calculation logic is implemented in the User model

        // Return the view with the user's leave balance
        return view('leave_balances.index', compact('leaveBalance'));
    }
}
