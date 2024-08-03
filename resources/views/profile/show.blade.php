<!-- resources/views/profile/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .profile-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-field {
            margin-bottom: 10px;
        }
        label {
            font-weight: bold;
        }
        p {
            margin: 0;
        }

        .edit-profile-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .edit-profile-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="profile-container">
        <h1>User Profile</h1>

        <div class="profile-field">
            <label>Name:</label>
            <p>{{ $user->name }}</p>
        </div>

        <div class="profile-field">
            <label>Email:</label>
            <p>{{ $user->email }}</p>
        </div>


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
        <!-- Add more profile fields as needed -->

        <a href="{{ route('profile.edit') }}" class="edit-profile-link">Edit Profile</a>
    </div>

</body>
</html>
