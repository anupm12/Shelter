@extends("layouts.app") @section("content")

<div class="container  py-5">
    <div class="row carousel-c">
        <div class="col-md-9 pr-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active item">
                        <img class="d-block w-100 img-fluid" src="{{ asset($single -> image1) }}?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
                    </div>
                    <div class="carousel-item item">
                        <img class="d-block w-100 img-fluid" src="{{ asset($single -> image2) }}?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
                    </div>
                    <div class="carousel-item item">
                        <img class="d-block w-100 img-fluid" src="{{ asset($single -> image3) }}?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
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
        <div class="col-md-3">
            <div class="card text-center">
                <h5 class="card-header">Book Here</h5>
                <div class="card-body">
                    <h5 class="card-title">Pay advance amount to book this propety.</h5>
                    <p class="card-text">Book it through
                        <b style="color:#eb3b5a" ;>Shelter</b> and get Rs.500 off your first rent.</p>
                    <a href="#" class="btn btn-c btn-primary">Pay Now</a>
                </div>
            </div>

            <div class="card text-center mt-5 pb-2">
                <h5 class="card-header">Have Any Queries?</h5>
                <div class="card-body">
                    <h5 class="card-title">Contact Us</h5>
                    <p class="card-text">
                        <b style="color:#eb3b5a" ;>+91 - 1800-1234-5678</b>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container tab-c py-5">
    <div class="row">
        <div class="col-md-12">
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
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="col">Property name : </th>
                                <td scope="col"> {{ $single -> propertyname }} </td>
                            </tr>
                            <tr>
                                <th scope="row">Address : </th>
                                <td> {{ $single -> address1 }}, {{ $single -> address2 }} </td>
                            </tr>
                            <tr>
                                <th scope="row">Area : </th>
                                <td> {{ $single -> area }} </td>
                            </tr>
                            <tr>
                                <th scope="row">City : </th>
                                <td> {{ $single -> city }} </td>
                            </tr>
                            <tr>
                                <th scope="row">State : </th>
                                <td> {{ $single -> state }} </td>
                            </tr>
                            <tr>
                                <th scope="row">Rent : </th>
                                <td> {{ $single -> rent }} </td>
                            </tr>
                            <tr>
                                <th scope="row">Advance : </th>
                                <td> {{ $single -> advance }} </td>
                            </tr>
                            <tr>
                                <th scope="row">For : </th>
                                <td> {{ $single -> for }} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="col">Landlord"s name : </th>
                                <td scope="col"> {{ $single -> firstname }} {{ $single -> firstname }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="col">Property name : </th>
                                <td scope="col"> {{ $single -> propertyname }} </td>
                            </tr>
                            <tr>
                                <th scope="row">Address : </th>
                                <td> {{ $single -> address1 }}, {{ $single -> address2 }} </td>
                            </tr>
                            <tr>
                                <th scope="row">Area : </th>
                                <td> {{ $single -> area }} </td>
                            </tr>
                            <tr>
                                <th scope="row">City : </th>
                                <td> {{ $single -> city }} </td>
                            </tr>
                            <tr>
                                <th scope="row">State : </th>
                                <td> {{ $single -> state }} </td>
                            </tr>
                            <tr>
                                <th scope="row">Rent : </th>
                                <td> {{ $single -> rent }} </td>
                            </tr>
                            <tr>
                                <th scope="row">Advance : </th>
                                <td> {{ $single -> advance }} </td>
                            </tr>
                            <tr>
                                <th scope="row">For : </th>
                                <td> {{ $single -> for }} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
 <div class="col-md-4">
            <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!!route("addmoney.stripe")!!}">

                {{ csrf_field() }}

                <div class="form-row">
                    <div class="col-xs-12 form-group card required">
                        <label class="control-label">Card Number</label>
                        <input autocomplete="off" class="form-control card-number" size="20" type="text" name="card_no">
 </div>
 </div>
 <div class="form-row">
 <div class="col-xs-4 form-group cvc required">
 <label class="control-label">CVV</label>
 <input autocomplete="off" class="form-control card-cvc" placeholder="ex. 311" size="4" type="text" name="cvvNumber">
 </div>
 <div class="col-xs-4 form-group expiration required">
 <label class="control-label">Expiration</label>
 <input class="form-control card-expiry-month" placeholder="MM" size="2" type="text" name="ccExpiryMonth">
                    </div>
                    <div class="col-xs-4 form-group expiration required">
                        <label class="control-label"> </label>
                        <input class="form-control card-expiry-year" placeholder="YYYY" size="4 " type="text" name="ccExpiryYear">
 <input class="form-control card-expiry-year" placeholder="YYYY" size="4" type="hidden" name="amount" value="300 ">
 </div>
 </div>
 <div class="form-row">
 <div class="col-md-12">
 <div class="form-control total btn btn-info">
 Total:
 <span class="amount">$300</span>
 </div>
 </div>
 </div>
 <div class="form-row">
 <div class="col-md-12 form-group">
 <button class="form-control btn btn-primary submit-button" type="submit">Pay »</button>
 </div>
 </div>
 <div class="form-row">
 <div class="col-md-12 error form-group hide">
 <div class="alert-danger alert">
 Please correct the errors and try again.
 </div>
 </div>
 </div>
 </form>
 </div>
 <div class="col-md-4"></div>
 </div>
</div>
@endsection

