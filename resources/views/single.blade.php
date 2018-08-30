@extends('layouts.app') @section('content')
<!-- <p> {{ $single -> description }} </p> -->




<div class="container  py-5">
    <div class="row carousel-c">
        <div class="col-md-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active item">
                        <img class="d-block w-100 img-fluid" src="{{ asset($single -> image1)}}?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
                    </div>
                    <div class="carousel-item item">
                        <img class="d-block w-100 img-fluid" src="{{ asset($single -> image2)}}?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
                    </div>
                    <div class="carousel-item item">
                        <img class="d-block w-100 img-fluid" src="{{ asset($single -> image3)}}?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- <div class="col-md-4 d-flex justify-content-center">
            <div class="card card-booking text-center book">
                <h5 class="card-header">Book Here</h5>
                <div class="card-body">
                    <h5 class="card-title">Pay a token amount to book this propety.</h5>
                    <p class="card-text">Book it through <b style="color:#eb3b5a";>Shelter</b> and get Rs.500 off.</p>
                    <a href="#" class="btn btn-c btn-primary">Pay Now</a>
                </div>
            </div>
        </div> -->

        <form action="{{ route('make-payment',['id'=>$single -> id,'o_id'=>$single-> user_id]) }}" method="POST">
            {{ csrf_field() }}
            <input type="number" name="amount" value="{{ $single -> advance }}"  style="display:none">

        <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="{{ config('services.stripe.key') }}"
            data-amount=" {{ $single -> advance }} "
            data-name="Book now"
            data-description="Pay now to book your stay."
            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
            data-locale="auto">
        </script>
        </form>
    </div>
</div>
<div class="container tab-c py-5">
    <div class="row">
        <div class="col-md-8">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home"
                        aria-selected="true">Property Details</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile"
                        aria-selected="false">About owner</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact"
                        aria-selected="false">Contact Information</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
            </div>
        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>


@endsection
