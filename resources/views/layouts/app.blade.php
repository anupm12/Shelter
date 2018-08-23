<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href=" {{ asset('css/app.css') }} " >
    
   
   
    <!-- CSRF token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Indie+Flower|Lato:400,700" rel="stylesheet">



</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light nav-c fill content">
            <a href="#" class="navbar-brand">
                <img src="{{ asset('Images/logo.png') }} " alt="error" class="logo"> {{ config('app.name', 'Laravel') }}
            </a>
            <div class="icons">
                <button class="navbar-toggler icon" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <script>
                var animation = 'rubberBand';
                $('.icon').on('click', function () {
                    $(this).toggleClass('icon--active');
                });
                $('.icon').on('click', function () {
                    $(this).addClass('animated ' + animation).one(
                        'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
                        function () {
                            $(this).removeClass('animated ' + animation);
                        });
                });

            </script>


            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
                <ul class="navbar-nav ml-auto">
                    @if (Route::has('login'))
                    <li class="nav-item mx-5">
                        <a href="{{ url('/') }}" class="mr-5 link-2">Home</a>
                    </li>
                    @auth
                    <li class="nav-item mx-5">
                        <a href="{{ url('/home') }}" class="mr-5 link-2">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('owner') }}">Become a owner</a>
                    </li>
                    @else
                    <li class="nav-item mx-5">
                        <a href="{{ route('login') }}" class="mr-1 link-2">Login</a>
                        <img src="{{ asset('Images/login.png') }} " alt="error" class="nav-img-1">
                    </li>
                    <li class="nav-item mx-5">
                        <a href="{{ route('register') }}" class="mr-1 link-2">Register</a>
                        <img src="../../Images/register.png" alt="error" class="nav-img-2">
                    </li>
                    @endauth @endif
                </ul>
            </div>
    </div>
    </nav>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>




    
</html>
