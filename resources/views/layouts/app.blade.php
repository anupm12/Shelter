<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" type="text/css" media="screen" href=" {{ asset('css/app.css') }} ">


    <!-- CSRF token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Shelter</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="main.js"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Indie+Flower|Lato:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">

   

</head>

<body>

    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light nav-c fill content" id="nav">
            <a href="{{ url('/') }}" class="navbar-brand">
                <img src="{{ asset('Images/logo1.png') }} " alt="Error" class="logo">
            </a>
            <div class="icons">
                <button class="navbar-toggler icon" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-5 link-2">
                        <a href="{{ url('/') }}" class="mr-1 nav-link">Home</a>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item mx-5">
                        <a href="{{ route('login') }}" class="mr-1 link-2 nav-link">Login</a>
                        <!-- <img src="{{ asset('Images/login.png') }} " alt="error" class="nav-img-1"> -->
                    </li>
                    <li class="nav-item mx-5">
                        <a href="{{ route('register') }}" class=" nav-link mr-1 link-2">Register</a>
                        <!-- <img src="../../Images/register.png" alt="error" class="nav-img-2"> -->
                    </li>
                    @else @if( !Auth::user()->isowner )
                    <li class="nav-item mx-5">
                        <a class="nav-link link-2" href="{{ route('owner')}}">Become a owner</a>
                    </li>
                    @else
                    <li class="nav-item mx-5 link-2">
                        <a class="nav-link" href="{{ route('owner')}}">Add More</a>
                    </li>
                    @endif

                    <li class="nav-item dropdown mx-5">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle link-2" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href=" {{route('viewprofile',['id'=>Auth::user()->id]) }} ">
                                {{ __('View profile') }}
                            </a>
                            @if(Auth::user()->isowner)
                            <a class="dropdown-item" href=" {{route('billing',['id'=>Auth::user()->id]) }} ">
                                {{ __('Billing') }}
                            </a>
                            @endif
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


            </div>
        </nav>
    </div>



    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

    <main class="bg-img">
        @yield('content')
    </main>

</body>
</html>
