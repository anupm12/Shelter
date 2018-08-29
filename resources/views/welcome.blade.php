@extends('layouts.app') @section('content')
{{Session::get('country')}}


<!-- <!doctype html>
<html lang="{{ app()->getLocale() }}">

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
                        <select  onchange="yesnoCheck(this);" name="type" id="type" class="form-control from-control-lg">

                            <option value="pg">PG</option>
                            <option value="home">Home</option>
                        </select>
                    </div>

                    <div class="col">
                            <div id="ifHome1" style="display:block;">
                            {{-- <label for="forgender">Property for</label> --}}
                            <select name="for" id="forgender" class="form-control from-control-lg">
                                <option value="" disabled selected hidden>Please Choose</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="both">Both</option>
                                <option value="others">Others</option>
                            </select>
                        </div>

                        <div id="ifHome" style="display:none;">
                            {{-- <label for="bhk">Select </label> --}}
                            <select name="for" id="bhk" class="form-control from-control-lg">
                                <option value="" disabled selected hidden>Please Choose</option>
                                <option value="1 BHk">1 BHK</option>
                                <option value="2 BHK">2 BHK</option>
                                <option value="3 BHK">3 BHK</option>
                                <option value="3+ BHK">3+ BHK</option>
                            </select>
                        </div>


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
            <img src="Images/down.svg" alt="" style="height:80px ; width:100px;" onClick="document.getElementById('down-arrow').scrollIntoView();">
        </div>
    </div>
</div>



<div class="row pt-5" id="down-arrow-1">
    <div class="col-md-6">
        <p class="display-4 text-center">Looking for<br> <b class="highlight-text" style="color:rgb(185, 60, 64);"> a PG</b>
            <br>or<b class="high-text" style="color:rgb(185, 60, 64);">
                Home?</b></p>
    </div>
    <div class="col-md-6">
    </div>
</div>

<div class="row" id="down-arrow-2">
    <div class="col-md-6">
    </div>
    <div class="col-md-6">
        <p class="display-4 text-center">We are here to <br> <b class="highlight-text" style="color:rgb(185, 60, 64);">Help
                You.</p>
    </div>
</div>


<div class="row details p-5 description">
    <div class="col-md-3">
        <h1>Everything you need.</h1>
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
        <h1>Simplified Search.</h1>
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
                <p class="card-text">Search results will be displayed.</p>
                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
            </div>
        </div>
    </div>


</div>







<script type="text/javascript">
    function yesnoCheck(that) {
        if (that.value == "home") {
            document.getElementById("ifHome").style.display = "block";
            document.getElementById("ifHome1").style.display = "none";

        } else {
            document.getElementById("ifHome").style.display = "none";
            document.getElementById("ifHome1").style.display = "block";
        }
    }
</script>

<!--  </body> -->










<!-- </html> -->




@endsection
