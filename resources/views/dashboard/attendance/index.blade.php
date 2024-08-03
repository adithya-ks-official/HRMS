<!-- resources/views/attendance/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Attendance Records</h1>
    <table>
        <thead>
            <tr>
                <th>Employee ID</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendances as $attendance)
                <tr>
                    <td>{{ $attendance->employee_id }}</td>
                    <td>{{ $attendance->status }}</td>
                    <td>{{ $attendance->date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
