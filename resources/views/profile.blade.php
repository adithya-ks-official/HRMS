<!-- resources/views/profile.blade.php -->

@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('profile.update', ['id' => $user->id]) }}">
    @csrf
    @method('PUT')
    <div class="container">
        <h1>User Profile</h1>
        <p>Name: {{ Auth::user()->name }}</p>
        <p>Email: {{ Auth::user()->email }}</p>
        <!-- Add more profile information as needed -->
        <div class="profile-field">
    <label>Address:</label>
    <p>{{ $user->address }}</p>
</div>

<div class="profile-field">
    <label>Phone Number:</label>
    <p>{{ $user->phone_number }}</p>
</div>

<div class="profile-field">
    <label>Job:</label>
    <p>{{ $user->job }}</p>
</div>

<div class="profile-field">
    <label>Department:</label>
    <p>{{ $user->department }}</p>
</div>

<div class="profile-field">
    <label>Salary:</label>
    <p>{{ $user->salary }}</p>
</div>

        <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
    </div>
 </form>
@endsection
