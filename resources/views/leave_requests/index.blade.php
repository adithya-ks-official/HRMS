<!-- resources/views/leave_requests/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Leave Requests</h1>
        <!-- Your leave requests listing code goes here -->
        @if ($leaveRequests->isEmpty())
            <p>No leave requests found.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Reason</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($leaveRequests as $leaveRequest)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                          
                            <td>{{ $leaveRequest->start_date }}</td>
                            <td>{{ $leaveRequest->end_date }}</td>
                            <td>{{ $leaveRequest->reason }}</td>
                            <td>{{ $leaveRequest->status }}</td>
                            <td>
                                <!-- Add edit and delete buttons as needed -->
                                <a href="{{ route('leave_requests.edit', $leaveRequest->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('leave_requests.destroy', $leaveRequest->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    </div>
@endsection
