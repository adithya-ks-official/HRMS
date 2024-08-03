<!-- resources/views/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
</head>
<body style="font-family: Arial, sans-serif; background-color: #f8f8f8; padding: 20px;">

    <header style="background-color: #333; color: #fff; padding: 10px 0;">
        <nav style="text-align: center;">
            <ul style="list-style: none; display: inline-block;">
                <li style="display: inline-block; margin-right: 20px;"><a href="{{ route('home') }}" style="color: #fff; text-decoration: none; font-weight: bold;">Home</a></li>
                <li style="display: inline-block; margin-right: 20px;"><a href="{{ route('logout') }}" style="color: #fff; text-decoration: none; font-weight: bold;">Logout</a></li>
            </ul>
        </nav>
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .dashboard-container {
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
        .profile-photo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
            display: block;
            margin: 0 auto;
        }
        .profile-link {
            display: inline-block;
            text-align: center;
            text-decoration: none;
            color: #fff;
            padding: 40px;
            border-radius: 20px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            transition: transform 0.2s ease;
            width: 5cm; /* Set width to 8 centimeters */
            height: 5cm; /* Set height to 8 centimeters */
            line-height: 5cm; /* Center text vertically */
            position: relative; /* Set position to relative for absolute positioning of the icon */
        }
        .profile-link img {
            position: absolute; /* Set position to absolute for proper positioning */
            top: 50%; /* Position the icon vertically centered */
            left: 50%; /* Position the icon horizontally centered */
            transform: translate(-50%, -50%); /* Adjust positioning to center the icon */
            width: 50px; /* Adjust width of the icon */
            height: auto; /* Maintain aspect ratio */
        }
        .profile-link:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .view-departments-btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }

        .view-departments-btn:hover {
            background-color: #0056b3;
        }
        .action-button {
            display: inline-block;
            text-align: center;
            text-decoration: none;
            color: #fff;
            padding: 40px;
            border-radius: 20px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            transition: transform 0.2s ease;
            width: 5cm; /* Set width to 8 centimeters */
            height: 5cm; /* Set height to 8 centimeters */
            line-height: 5cm; /* Center text vertically */
            position: relative;
        }

        .action-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
   

        .leave-btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }

        .leave-btn:hover {
            background-color: #0056b3;
        }
        .leave-button {
            display: inline-block;
            text-align: center;
            text-decoration: none;
            color: #fff;
            padding: 40px;
            border-radius: 20px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            transition: transform 0.2s ease;
            width: 5cm; /* Set width to 8 centimeters */
            height: 5cm; /* Set height to 8 centimeters */
            line-height: 5cm; /* Center text vertically */
            position: relative;
        }

        .leave-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
   
        .attendance-btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }

        .attendance-btn:hover {
            background-color: #0056b3;
        }
        .attendance-button {
            display: inline-block;
            text-align: center;
            text-decoration: none;
            color: #fff;
            padding: 40px;
            border-radius: 20px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            transition: transform 0.2s ease;
            width: 5cm; /* Set width to 8 centimeters */
            height: 5cm; /* Set height to 8 centimeters */
            line-height: 5cm; /* Center text vertically */
            position: relative;
        }

        .attendance-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

    </style>

    </header>


    <main style="padding: 20px;">

        <section class="dashboard-section" style="background-color: #fff; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); padding: 20px; margin-bottom: 20px;">
            <h2 style="text-align: center; color: #333;">Welcome to the Dashboard</h2>
            
        </section>

        <!-- Add more sections or content as needed -->
        
        <a href="{{ route('profile.show') }}" class="profile-link">
        View Profile</a>

        <a href="{{ route('departments.index') }}"  class="action-button">View Departments</a>

        <a href="{{ route('leave.index') }}" class="leave-button"> Leave Management</a>

        <a href="{{ route('attendance.index') }}" class="attendance-button">Attendance</a>

    </main>

</body>
</html>
