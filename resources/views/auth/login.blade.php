<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .login-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        .login-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
        }

        .login-container form label {
            margin-bottom: 5px;
        }

        .login-container form input[type="email"],
        .login-container form input[type="password"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .login-container form button {
            padding: 10px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-container form button:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: #ff0000;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        @if(session('error'))
            <p class="error-message">{{ session('error') }}</p>
        @endif
        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <label for="email">Email</label>
            <input id="email" type="email" name="email" required>

            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>