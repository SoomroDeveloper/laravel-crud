<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Include Google Fonts for custom font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS (from CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ6gD2zRSLv76G9+UmCBKZ1P1hx8L5gPz5Vx9Wu6FEOJ4p6JWbL2wWp+rfjb" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <header>
            <!-- Bootstrap Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
                <a class="navbar-brand" href="{{ route('posts.index') }}">Laravel CRUD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('posts.index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('posts.create') }}">Create Post</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Adding an image at the top of the page -->
            {{-- <div class="text-center mb-4">
                <img src="{{ asset('images/sample.jpg') }}" alt="Sample Image" class="img-fluid" style="max-width: 100%; height: auto;">
            </div> --}}

        <main>
            @yield('content') <!-- Content section injected here -->
        </main>

        <footer class="mt-5">
            <p class="text-center">&copy; 2025 Laravel CRUD</p>
        </footer>
    </div>

    <!-- Bootstrap JS (from CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-+bB5jZ5lZCTF1sX5lC5KxuXYEbbOEKyKvTknqv5TtUyjBwb88LfFmDAWzCTsrfTz" crossorigin="anonymous"></script>
</body>
</html>
