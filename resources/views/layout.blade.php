<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap');
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid d-flex flex-column align-items-center">

                <div class="mb-2">
                    <img src="{{ asset('images/scope-logo.png') }}" alt="logo" style="height: 40px;">
                </div>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav d-flex justify-content-center w-100">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">About Us</a>
                        <a class="nav-link" href="#">Contact</a>
                        <a class="nav-link" href="#">Registration</a>
                        <a class="nav-link" href="#">Login</a>
                        <a class="nav-link" href="#">Student Dashboard</a>

                    </div>
                </div>
            </div>
        </nav>

    </header>



    <div class="content">
        @yield('page')
    </div>


    <footer class="text-center bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5>Follow Us</h5>
                    <a href="#" class="text-white me-3 ">Facebook</a>
                    <a href="#" class="text-white me-3">Twitter</a>
                    <a href="#" class="text-white">Instagram</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="mb-0">&copy; 2007-2024 Suffix E-Solutions. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>