<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Posty</title>
    @vite('resources/css/app.css')
</head>
    <body class="bg-gray-100">
    <nav class="p-6 bg-white flex sm:justify-between">
        <ul class="flex items-center">
            <li>
                <a href="" class="p-6">Home</a>
            </li>
            <li>
                <a href="" class="p-6">Dashboard</a>
            </li>
            <li>
                <a href="" class="p-6">Post</a>
            </li>
        </ul>
        <ul class="flex items-center">
            <li>
                <a href="" class="p-6">Andy Gardner</a>
            </li>
            <li>
                <a href="" class="p-6">Login</a>
            </li>
            <li>
                <a href="" class="p-6">Register</a>
            </li>

            <li>
                <a href="" class="p-6">Logout</a>
            </li>
        </ul>
    </nav>
        @yield('content')
    </body>
</html>
