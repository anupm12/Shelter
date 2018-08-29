@extends('layouts.app') @section('content')


<section class="container py-5 my-5">
    <div class="row">


        <div class="col-md-2">
        </div>


        <div class="col-md-8">

            <form action=" {{ route('owner.store') }} " method="post" enctype="multipart/form-data" class="form-c">
                {{ csrf_field() }}

                <div class="form-row form-group">
                    <div class="col">
                        <label for="firstname">First name</label>
                        <input name="firstname" type="text" class="form-control from-control-lg" id="firstname" placeholder="Enter first name">
                    </div>

                    <div class="col">
                        <label for="lastname">Last name</label>
                        <input name="lastname" type="text" class="form-control from-control-lg" id="lastname" placeholder="Enter last name">
                    </div>
                </div>

                <!-- <label for="">Select multiple images</label>
                <div class="form-group increment input-group control-group">

                    <input type="file" class="form-control" name="filename[]">
                    <div class="input-group-btn">
                        <button class="btn btn-success" type="button">
                            <i class="glyphicon glyphicon-plus"></i>Add</button>
                    </div>
                </div>
                <div class="clone hide">
                    <div class="control-group input-group" style="margin-top:10px">
                        <input type="file" name="filename[]" class="form-control">
                        <div class="input-group-btn">
                            <button class="btn btn-danger" type="button">
                                <i class="glyphicon glyphicon-remove"></i> Remove</button>
                        </div>
                    </div>
                </div> -->


                <div class="form-group">
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
                </div>

                <div class="form-group py-3">
                    <label for="inputAddress">Address line 1</label>
                    <input name="address1" type="text" class="form-control from-control-lg" id="inputAddress" placeholder="1234 Main St">
                </div>

                <div class="form-group">
                    <label for="inputAddress2">Address line 2</label>
                    <input name="address2" type="text" class="form-control from-control-lg" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>

                <div class="form-group">
                    <label for="area">Area</label>
                    <input name="area" type="text" class="form-control from-control-lg" id="area" placeholder="Enter area name">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="ac1">City</label>
                        <input name="city" type="text" class="autocomplete form-control from-control-lg" id="ac1" placeholder="Select your city">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="ac2">State</label>
                        <input name="state" type="text" class="autocomplete form-control from-control-lg" id="ac2" placeholder="Select state">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input name="zip" type="text" class="form-control from-control-lg" id="inputZip" placeholder="Enter zip code">
                    </div>
                </div>

                <div class="form-group">
                    <label for="propertyname">Property name</label>
                    <input name="propertyname" type="text" class="form-control from-control-lg" id="propertyname" placeholder="Enter property name">
                </div>

                <div class="form-group">
                    <label for="rent">Rent</label>
                    <input name="rent" type="text" class="form-control from-control-lg" id="rent" placeholder="Only in numbers">
                </div>

                <div class="form-group">
                    <label for="advance">Advance amount</label>
                    <input name="advance" type="text" class="form-control from-control-lg" id="advance" placeholder="Only in numbers">
                </div>

                    <div class="form-row form-group">
                    <div class="col">
                        <label for="type">Property type</label>
                        <select  onchange="yesnoCheck(this);" name="type" id="type" class="form-control from-control-lg" placeholder="Select property type">
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
                            <select name="bhk" id="bhk" class="form-control from-control-lg">
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
                    <label for="exampleFormControlTextarea1">Add description</label>
                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-c align-center">Submit</button>
            </form>
        </div>
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

    initialize();


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
