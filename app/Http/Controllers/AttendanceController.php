<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance; // Replace with your attendance model
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::all();
    return view('attendance.index', compact('attendances'));

    $attendances = Attendance::all();
    return view('attendance.index')->with('attendances', $attendances);
        // Display attendance recording form for the current user (employee)
        return view('attendance.mark');
        return view('attendance.index', ['attendances' => $attendances]);
    }

    public function store(Request $request)
    {
        // Validate attendance data (e.g., date, time)
        $validated = $request->validate([
            'date' => 'required|date', // Ensure valid date format
        ]);

        // Check if attendance for the current date already exists for the user
        $existingAttendance = Attendance::where('user_id', Auth::id())
            ->where('date', $validated['date'])
            ->first();

        if ($existingAttendance) {
            // Handle error if attendance already exists for the day
            return redirect()->back()->withErrors(['date' => 'Attendance already marked for this date.']);
        }

        // Create a new attendance record for the current user and date
        $attendance = Attendance::create([
            'user_id' => Auth::id(),
            'date' => $validated['date'],
            'marked_at' => now(), // Record the current time
        ]);

        // Handle successful attendance recording
        return redirect()->back()->with('success', 'Attendance marked successfully!');
    }
    public function storeAttendance(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'employee_id' => 'required|integer',
            'time_in' => 'required|date_format:H:i', // Validate time format
            'time_out' => 'required|date_format:H:i', // Validate time format
            'date' => 'required|date',
        ]);

        // Create a new Attendance instance
        $attendance = new Attendance();
        $attendance->employee_id = $validatedData['employee_id'];
        $attendance->time_in = $validatedData['time_in'];
        $attendance->time_out = $validatedData['time_out'];
        $attendance->date = $validatedData['date'];

        // Save the attendance record
        $attendance->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Attendance recorded successfully.');
    }

    public function mark(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'employee_id' => 'required|integer',
        ]);

        // Find the employee by ID
        $employee = Employee::find($validatedData['employee_id']);

        // Create a new Attendance instance
        $attendance = new Attendance();
        $attendance->employee_id = $employee->id;
        $attendance->date = Carbon::today(); // Set the date to today
        $attendance->time_in = Carbon::now(); // Set the time in to current time

        // Save the attendance record
        $attendance->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Time in recorded successfully.');
    }
}
