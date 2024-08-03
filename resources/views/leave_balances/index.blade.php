<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Balances</title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>
<body>
    <h1>Leave Balances</h1>
    
    <!-- Add your leave balance display code here -->
    <table>
        <thead>
            <tr>
                <th>Employee</th>
                <th>Balance</th>
            </tr>
        </thead>
        <tbody>
            @foreach($leaveBalances as $user => $balance)
            <tr>
                <td>{{ $user }}</td>
                <td>{{ $balance }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
