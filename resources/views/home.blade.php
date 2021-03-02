<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap files -->
    <link rel="stylesheet" href="{{asset('bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap.min.js') }}"></script>

    <!-- css file -->
    <link rel="stylesheet" href="{{ asset('css/home.css')}}">

    <!-- font awesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Restaurant</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                D'Eatery
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav offset-md-6">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">About Us</a>
                    <a class="nav-link" href="#">Contact Us</a>
                </div>
                <div class="navbar-nav offset-md-1 account">
                    <a class="nav-link" href="{{ '/register' }}">Register</a>
                    <a class="nav-link" href="{{ '/login' }}">Login</a>
                </div>
            </div>

        </div>
    </nav>
    <!-- image top -->

</body>

</html>