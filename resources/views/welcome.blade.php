<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                background-color: #f4f4f4;
                font-family: 'Nunito', sans-serif;
                height: 100vh;
                margin: 0;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .login-container {
                background-color: #fff;
                border-radius: 8px;
                padding: 20px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                text-align: center;
            }

            .login-container .title {
                font-size: 24px;
                font-weight: 600;
                margin-bottom: 20px;
            }

            .login-container form {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .login-container form label {
                font-size: 16px;
                margin-bottom: 8px;
                color: #333;
            }

            .login-container form input {
                width: 100%;
                padding: 10px;
                margin-bottom: 16px;
                border: 1px solid #ddd;
                border-radius: 4px;
                font-size: 16px;
            }

            .login-container form button {
                background-color: #4dba87;
                color: #fff;
                padding: 12px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
                font-weight: 600;
            }

            .login-container .links > a {
                color: #4dba87;
                margin-top: 16px;
                text-decoration: none;
                font-weight: 600;
            }
        </style>
    </head>
    <body>
        <div class="login-container">
            <div class="title">
                Selamat Datang di aplikasi Software project
            </div>

            <form action="{{ route('login') }}" method="post">
                @csrf
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Login</button>
            </form>

            <div class="links">
                <a href="{{ route('register') }}">Don't have an account? Register here</a>
            </div>
        </div>
    </body>
</html>
