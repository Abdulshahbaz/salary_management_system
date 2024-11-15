<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salary Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #0056b3;
        }
        p {
            font-size: 14px;
            line-height: 1.6;
            color: #666;
        }
        .salary-info {
            font-size: 16px;
            color: #333;
            margin-top: 20px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #aaa;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h1>Your Salary for the Month Has Been Processed</h1>
        <p>Date: <strong>{{ \Carbon\Carbon::parse($employee->updated_at)->format('F d, Y') }}</strong></p>
        <p>Dear: <strong>{{$employee->name}}</strong>,</p>
        
        <div class="salary-info">
            <p>Salary:₹ <strong>{{ number_format($salary, 2) }}</strong></p>
        </div>
        
        <p>Thank you for your dedication and hard work!</p>

        <div class="footer">
