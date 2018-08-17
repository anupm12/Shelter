<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href=" {{ asset('css/app.css') }} " />
    <script src="main.js"></script>

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Indie+Flower|Lato:400,700" rel="stylesheet">

</head>

<body>




    <div class="div-c" >
        <nav class="navbar navbar-expand-lg navbar-light bg-light nav-c">
        <img src="{{ asset('Images/logo.png') }} " alt="error" class="logo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">

                    @if (Route::has('login'))
                    <li class="nav-item mx-5">
                        <a href="{{ url('/') }}" class="mx-5">Home</a>
                    </li>
                    @auth
                    <li class="nav-item mx-5">
                        <a href="{{ url('/home') }}" class="mx-5">Home</a>
                    </li>
                    @else
                    <li class="nav-item mx-5">
                        <a href="{{ route('login') }}" class="mr-1">Login</a>
                        <img src="{{ asset('Images/login.png') }} " alt="error" class="nav-img-1">
                    </li>
                    <li class="nav-item mx-5">
                        <a href="{{ route('register') }}" class="mr-1">Register</a>
                        <img src="../../Images/register.png" alt="error" class="nav-img-2">
                    </li>
                    @endauth 
                    @endif


                </ul>
            </div>

        </nav>
    </div>
</body>

</html>
