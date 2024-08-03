<!-- resources/views/attendance/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Record Attendance</h1>
    <form action="{{ route('attendance.store') }}" method="post">
        @csrf
        <div>
            <label for="employee_id">Employee ID</label>
            <input type="number" name="employee_id" id="employee_id" required>
        </div>
        <div>
            <label for="status">Status</label>
            <select name="status" id="status" required>
                <option value="present">Present</option>
                <option value="absent">Absent</option>
            </select>
        </div>
        <div>
            <label for="date">Date</label>
            <input type="date" name="date" id="date" required>
        </div>
        <button type="submit">Record Attendance</button>
    </form>
@endsection
