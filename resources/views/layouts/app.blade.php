<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Student Management</title>
    <link rel="stylesheet" href="/pico.min.css" />
</head>
<body>
<header class="container">
    <nav class="navbar">
        <strong>Student Management</strong>
        <ul>
            <li><a href="{{ route('students.index') }}">Students</a></li>
            <li><a href="{{ route('students.create') }}">Add Student</a></li>
        </ul>
    </nav>
</header>
<main class="container mt-4">
    @yield('content')
</main>
</body>
</html>

