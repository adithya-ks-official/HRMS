<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Index</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="date"],
        input[type="time"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>



</head>
<body>
    <h1>Attendance Records</h1>
    <ul>
        @foreach($attendances as $attendance)
            <li>{{ $attendance->id }} - {{ $attendance->date }}</li>
        @endforeach
    </ul>

    <form action="{{ route('attendance.mark') }}" method="post">
        @csrf
        <label for="employee_name">Employee Name:</label>
        <input type="text" id="employee_name" name="employee_name" required>
        <label for="date">Date:</label>
        <input type="date" id="date"  name="date" required>
        <label for="time_in">Time In:</label>
        <input type="time" id="time_in" name="time_in" required>
        <label for="time_out">Time Out:</label>
        <input type="time" id="time_out" name="time_out" required>
        <button type="submit">Submit</button>
    </form>

</body>
</html>
