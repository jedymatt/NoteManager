<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <nav class="navbar navbar-light bg-light shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('notes.index') }}">
                Note Manager
            </a>
            <div class="d-flex">
                <a class="text-decoration-none text-reset" href="https://www.github.com/jedymatt/NoteManager">
                    <i class="bi-github" role="img" aria-label="GitHub"></i>
                    Source Code
                </a>
            </div>
        </div>
    </nav>
    <!-- Page Content -->
    <main>
        @yield('content')
    </main>
</body>

</html>