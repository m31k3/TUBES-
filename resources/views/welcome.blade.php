<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1fr;
            overflow: hidden;
        }
        .left-side {
            background-image: url('https://laravel.com/assets/img/welcome/background.svg');
            background-size: cover;
            background-position: center;
        }
        .right-side {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: #f7fafc;
        }
        .content {
            text-align: center;
        }
        .content img {
            width: 100px; /* Ukuran logo dapat disesuaikan */
            margin-bottom: 20px;
        }
        .content h1 {
            font-size: 2rem;
            color: #333;
        }
        .content p {
            font-size: 1.25rem;
            margin: 1rem 0;
            color: #666;
        }
        .buttons {
            margin-top: 2rem;
        }
        .buttons a {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            margin: 0.5rem;
            background-color: #8B0000;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .buttons a:hover {
            background-color: #a20000;
        }
    </style>
</head>
<body>
    <div class="left-side"></div>
    <div class="right-side">
        <div class="content">
            <img src="/images/logo.png" alt="Logo">
            <h1>Welcome to WITEL</h1>
            <p>Pendataan PKL/MAGANG dan Peminjaman ID Card</p>
            <div class="buttons">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>
</body>
</html>
