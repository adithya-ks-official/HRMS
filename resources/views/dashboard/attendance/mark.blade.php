@extends('layouts.app')

@section('content')
<h1>Mark Attendance</h1>

<form method="POST" action="{{ route('attendance.store') }}">
    @csrf

    <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" name="date" id="date" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Mark Attendance</button>
</form>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection
