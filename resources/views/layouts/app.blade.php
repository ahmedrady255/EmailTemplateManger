<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Styles -->
    <style>
    /* Base Styles */
    body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    color: #333;
    margin: 0;
    padding: 0;
    }

    a {
    color: #007bff;
    text-decoration: none;
    }

    a:hover {
    text-decoration: underline;
    }

    /* Layout Container */
    #app {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    }

    /* Navigation Bar */
    .navbar {
    background-color: #343a40;
    color: #ffffff;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    }

    .navbar .brand {
    font-size: 1.5rem;
    font-weight: bold;
    }

    .navbar .nav-links {
    display: flex;
    gap: 15px;
    }

    .navbar .nav-links a {
    color: #ffffff;
    font-size: 1rem;
    }

    .navbar .nav-links a:hover {
    text-decoration: underline;
    }

    /* Main Content */
    main {
    flex: 1;
    padding: 20px;
    }

    /* Footer */
    .footer {
    background-color: #343a40;
    color: #ffffff;
    text-align: center;
    padding: 10px 20px;
    font-size: 0.875rem;
    }

    .footer p {
    margin: 0;
    }

    /* Utility Classes */
    .text-center {
    text-align: center;
    }

    .mt-4 {
    margin-top: 1.5rem;
    }

    .mb-4 {
    margin-bottom: 1.5rem;
    }

</style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<div id="app">
    <!-- Navigation Bar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')
</div>
</body>
</html>
