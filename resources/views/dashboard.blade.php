<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .greeting {
            text-align: center;
            font-size: 24px;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Dashboard</h1>
        <p class="greeting">Hello, {{ $user->name }}</p>
    </div>
</body>
</html>
