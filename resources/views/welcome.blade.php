@extends('layouts.app') @section('content')


<div class="row pt-5">
    <div class="col-md-4">
    </div>

    <div class="col-md-4 home-form py-5">
        <form action="{{ route('results') }}" method="GET">
            <div class="form-group">
                <input name="query" type="text" class="form-control form-control-lg" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter city">
            </div>

            <div class="form-row form-group">
                <div class="col">
                    <select onchange="yesnoCheck(this);" name="type" id="type" class="form-control from-control-lg">

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

<div class="row">
    <div class="col-md-12 text-center">
        <h1 class="p-4">Get in touch</h1>
    </div>
    <div class="row">
        <div class="col-md-6">

            <img src="/Images/contact.jpg" alt="" class="contact-image">
        </div>
        <div class="col-md-4 contact py-5">
            <form>
                <div class="form-group">
                    <label for="firstname">First name</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Your first name">
                </div>
                <div class="form-group">
                    <label for="lastname">Last name</label>
                    <input type="password" class="form-control" id="lastname" placeholder="Your last name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-c">Submit</button>
            </form>
        </div>
        <div class="col-md-2">

        </div>
    </div>
</div>


<div class="row social text-center">
    <div class="col-md-12">
        <ul>
            <li><a href="" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="" target="_blank"><i class=""><i class="fa fa-instagram icon-4x" aria-hidden="true"></i></a></li>
            <li><a href="" target="_blank"><i class=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            <li><a href="" target="_blank"><i class=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            <li><a href="" target="_blank"><i class=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="" target="_blank"><i class=""><i class="fa fa-linkedin" aria-hidden="true"></i></i></a></li>
        </ul>
    </div>
</div>



<div class="foot-container row">
    <div class="col-md-6">
        <ul class="foot-nav">
            <li><a href="#">home</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
        </ul>
    </div>

    <div class="col-md-6">
        <p>Designed and developed by Anupam Shukla.</p>
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




@endsection
