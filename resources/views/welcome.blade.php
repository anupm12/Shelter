@extends('layouts.app') @section('content')




<section class="hero-section container py-5 my-5">
    <div class="row">
        <div class="col-md-4">
            <!-- <p style="color:#fff; ">Home </p>
            <p style="color:#fff; ">For </p>
            <p style="color:#eb3b5a; ">Homeless. </p> -->


        </div>

        <div class="col-md-4 home-form py-5">
            <form action="{{ route('results') }}" method="GET">
                <div class="form-group">
                    <input name="query" type="text" class="form-control form-control-lg" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter city">
                </div>

                <div class="form-row form-group">
                    <div class="col">
                        <select name="type" id="type" class="form-control from-control-lg">

                            <option value="pg">PG</option>
                            <option value="home">Home</option>
                        </select>
                    </div>

                    <div class="col">
                        <select name="for" id="forgender" class="form-control from-control-lg">

                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="both">Both</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-c">Submit</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</section>

<div class="container text-center">
    <div class="row p-5">
        <div class="col-md-12">
            <img src="Images/down.svg" alt="" style="height:80px ; width:100px;" onClick="document.getElementById('down-arrow-1').scrollIntoView();">
        </div>
    </div>
</div>



<div class="row pt-5" id="down-arrow-1">
    <div class="col-md-6">
        <p class="display-4 text-right">Looking for<br> <b class="highlight-text" style="color:rgb(185, 60, 64);"> a PG</b>
            <br>or<b class="high-text" style="color:rgb(185, 60, 64);">
                Home?</b></p>
    </div>
    <div class="col-md-6">
    </div>
</div>

<div class="row d-flex align-content-center" id="down-arrow-2">
    <div class="col-md-6">
    </div>
    <div class="col-md-6 left">
        <p class="display-4">We are here to <br> <b class="highlight-text" style="color:rgb(185, 60, 64);">Help
                You.</p>
    </div>
</div>


<div class="row p-5 description">
    <div class="col-md-3">
        <h1><b style="color:rgb(185, 60, 64);">Everything</b> you need.</h1>
    </div>
    <div class="col-md-3" style="font-family:'Lato'; ">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/Images/home.svg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Single House</h5>
                <h6 class="card-subtitle mb-2 text-muted">For Family</h6>
                <p class="card-text">House that suits you best.</p>
                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
            </div>
        </div>
    </div>

    <div class="col-md-3" style="font-family:'Lato'; ">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/Images/home1.svg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Single Sharing PG</h5>
                <h6 class="card-subtitle mb-2 text-muted">For Students/Employees</h6>
                <p class="card-text">PG's at affordable prices</p>
                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
            </div>
        </div>
    </div>

    <div class="col-md-3" style="font-family:'Lato'; ">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/Images/home2.svg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Multiple Sharing PG</h5>
                <h6 class="card-subtitle mb-2 text-muted">For Students/Employees</h6>
                <p class="card-text">For those with tight budget.</p>
                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
            </div>
        </div>
    </div>
</div>


<div class="row p-5 search-steps">
    <div class="col-md-4">
        <h1>Simplified<b style="color:rgb(185, 60, 64);"> Search</b></h1>
    </div>
    <div class="col-md-4" style="font-family:'Lato'; ">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/Images/one.svg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Type in the search fields.</h5>
                <h6 class="card-subtitle mb-2 text-muted">All the fields are required.</h6>
                <p class="card-text">Search will be made based on these fields.</p>
                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
            </div>
        </div>
    </div>

    <div class="col-md-4" style="font-family:'Lato'; ">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/Images/two.svg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Hit Search.</h5>
                <h6 class="card-subtitle mb-2 text-muted">Please wait for 5 seconds.</h6>
                <p class="card-text">Search results will be displayed based on your preferences.</p>
                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
            </div>
        </div>
    </div>
</div>

<div class="row are-you text-center py-5">
    <div class="col-md-12">
        <h1>Are you a<b style="color:rgb(185, 60, 64);"> Owner?</b></h1>
        <button type="button" class="btn btn-primary btn-lg btn-c my-5">Click Here</button>
    </div>
</div>










@endsection
