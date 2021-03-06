@extends('layouts.app') @section('content')

<section class="container ">
    <div class="row">


        <div class="col-md-2">
        </div>


        <div class="col-md-8">
            <h2 class="pb-4">Edit advertisement</h2>

            <form action=" {{ route('editadvertisement.update',['id'=>$owner->id]) }} " method="post" enctype="multipart/form-data"
                class="form-c">
                {{ csrf_field() }}

                <div class="form-row form-group">
                    <div class="col">
                        <label for="firstname">First name</label>
                        <input value="{{ $owner->firstname }}" name="firstname" type="text" class="form-control from-control-lg"
                            id="firstname" placeholder="Enter first name">
                    </div>

                    <div class="col">
                        <label for="lastname">Last name</label>
                        <input value="{{ $owner->lastname }}" name="lastname" type="text" class="form-control from-control-lg"
                            id="lastname" placeholder="Enter last name">
                    </div>
                </div>


                <div class="form-group">
                    <input type="file" name="image1" class="file" id="image1">
                    <div class="input-group col-xs-12">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                        <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                        <span class="input-group-btn">
                            <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i>
                                Browse</button>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <input type="file" name="image2" class="file" id="image2">
                    <div class="input-group col-xs-12">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                        <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                        <span class="input-group-btn">
                            <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i>
                                Browse</button>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <input type="file" name="image3" class="file" id="image3">
                    <div class="input-group col-xs-12">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                        <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                        <span class="input-group-btn">
                            <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i>
                                Browse</button>
                        </span>
                    </div>
                </div>


                <!-- <div class="form-group">
                    <label for="image1">Add image</label>
                    <input type="file" class="form-control" id="image1" name="image1">
                </div>

                <div class="form-group">
                    <label for="image2">Add image</label>
                    <input type="file" class="form-control" id="image2" name="image2">
                </div>

                <div class="form-group">
                    <label for="image3">Add image</label>
                    <input type="file" class="form-control" id="image3" name="image3">
                </div> -->

                <div class="form-group py-3">
                    <label for="inputAddress">Address line 1</label>
                    <input value="{{ $owner->address1 }}" name="address1" type="text" class="form-control from-control-lg"
                        id="inputAddress" placeholder="1234 Main St">
                </div>

                <div class="form-group">
                    <label for="inputAddress2">Address line 2</label>
                    <input value="{{ $owner->address2 }}" name="address2" type="text" class="form-control from-control-lg"
                        id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>

                <div class="form-group">
                    <label for="area">Area</label>
                    <input value="{{ $owner->area }}" name="area" type="text" class="form-control from-control-lg" id="area"
                        placeholder="Enter area name">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="ac1">City</label>
                        <input value="{{ $owner->city }}" name="city" type="text" class="autocomplete form-control from-control-lg"
                            id="ac1" placeholder="Select your city">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="ac2">State</label>
                        <input value="{{ $owner->state }}" name="state" type="text" class="autocomplete form-control from-control-lg"
                            id="ac2" placeholder="Select state">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input value="{{ $owner->zip }}" name="zip" type="text" class="form-control from-control-lg" id="inputZip"
                            placeholder="Enter zip code">
                    </div>
                </div>

                <div class="form-group">
                    <label for="propertyname">Property name</label>
                    <input value="{{ $owner->propertyname }}" name="propertyname" type="text" class="form-control from-control-lg"
                        id="propertyname" placeholder="Enter property name">
                </div>

                <div class="form-group">
                    <label for="rent">Rent</label>
                    <input value="{{ $owner->rent }}" name="rent" type="text" class="form-control from-control-lg" id="rent"
                        placeholder="Only in numbers">
                </div>

                <div class="form-group">
                    <label for="advance">Advance amount</label>
                    <input value="{{ $owner->advance }}" name="advance" type="text" class="form-control from-control-lg"
                        id="advance" placeholder="Only in numbers">
                </div>


                <div class="form-row form-group">
                    <div class="col">
                        <label for="type">Property type</label>
                        <select onchange="yesnoCheck(this);" name="type" id="type" class="form-control from-control-lg"
                            placeholder="Select property type">
                            <option value="" disabled selected hidden>Please Choose</option>
                            <option value="pg">PG</option>
                            <option value="home">Home</option>
                        </select>
                    </div>

                    <div class="col">
                        <div id="ifHome1" style="display:block;">
                            <label for="forgender">Property for</label>
                            <select name="for" id="forgender" class="form-control from-control-lg">
                                <option value="" disabled selected hidden>Please Choose</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="both">Both</option>
                                <option value="others">Others</option>
                            </select>
                        </div>

                        <div id="ifHome" style="display:none;">
                            <label for="bhk">Select </label>
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


                <div class="form-group">
                    <label for="Textarea">Add description</label>
                    <textarea value="{{ $owner->description }}" name="description" class="form-control" id="Textarea"
                        rows="7"></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-c align-center">Update add</button>
            </form>
        </div>


        <div class="col-md-2">
        </div>


    </div>
</section>









<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
<script type="text/javascript">
    function initialize() {

        var acInputs = document.getElementsByClassName("autocomplete");

        for (var i = 0; i < acInputs.length; i++) {

            var autocomplete = new google.maps.places.Autocomplete(acInputs[i]);
            autocomplete.inputId = acInputs[i].id;

            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                document.getElementById("log").innerHTML = 'You used input with id ' + this.inputId;
            });
        }
    }





    function yesnoCheck(that) {
        if (that.value == "home") {
            document.getElementById("ifHome").style.display = "block";
            document.getElementById("ifHome1").style.display = "none";

        } else {
            document.getElementById("ifHome").style.display = "none";
            document.getElementById("ifHome1").style.display = "block";
        }
    }

    initialize();

</script>





@endsection
