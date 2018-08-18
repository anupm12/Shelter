<!doctype html>
<html lang="{{ app()->getLocale() }}">

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
    <link rel="stylesheet" type="text/css" media="screen" href=" {{ asset('css/app.css') }} " />


    <title>Shelter</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Indie+Flower|Lato:400,700" rel="stylesheet">


</head>

<body>






    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-c fill content ">
        <a href="#" class="navbar-brand">
            <img src="{{ asset('Images/logo.png') }} " alt="error" class="logo">
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
            <ul class="navbar-nav ml-auto">
                @if (Route::has('login'))
                <li class="nav-item mx-5">
                    <a href="{{ url('/') }}" class="mr-5 link-2">Home</a>
                </li>
                @auth
                <li class="nav-item mx-5">
                    <a href="{{ url('/home') }}" class="mr-5 link-2">Home</a>
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
    </nav>


    <!-- FORM -->

    <section class=" container search py-5 my-5">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <form>
                    <div class="form-group pb-1">                       
                        <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group pb-1 ">                       
                        <input type="text" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-c align-center">Submit</button>
                </form>
            </div>
            <div class="col-md-4">

            </div>          
        </div>
    </section>




</body>

</html>
