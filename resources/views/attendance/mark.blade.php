@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Attendance</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Clock In</th>
                    <th>Clock Out</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($attendances as $attendance)
                    <tr>
                        <td>{{ $attendance->date }}</td>
                        <td>{{ $attendance->clock_in }}</td>
                        <td>{{ $attendance->clock_out }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $attendances->links() }}
    </div>
@endsection
