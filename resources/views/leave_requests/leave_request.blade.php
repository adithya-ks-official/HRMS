<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Request</title>
    <style>
        /* CSS styles for the leave request page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 0 auto;
            max-width: 400px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        margin-top: 5px;
    }

    button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }
    </style>
</head>
<body>
    <header>
        <h1>Leave Request</h1>
    </header>
    <form>
    <div>
        <label for="employee_name">Employee Name:</label>
        <input type="text" id="employee_name" name="employee_name" class="form-control" required>
    </div>
    <div>
        <label for="employee_email">Employee Email:</label>
        <input type="email" id="employee_email" name="employee_email" class="form-control" required>
    </div>
        <div>
            <label for="start_date">Start Date:</label>
            <input type="text" id="start_date" name="start_date">
        </div>
        <div>
            <label for="end_date">End Date:</label>
            <input type="text" id="end_date" name="end_date">
        </div>
        <div>
            <label for="reason">Reason:</label>
            <textarea id="reason" name="reason" rows="4"></textarea>
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
