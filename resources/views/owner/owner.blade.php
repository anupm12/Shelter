@extends('layouts.app') @section('content')





<section class="container py-5 my-5">
    <div class="row">


        <div class="col-md-2">
        </div>


        <div class="col-md-8">

            <form action=" {{ route('owner.store') }} " method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-row form-group">
                    <div class="col">
                        <label for="firstname">First name</label>
                        <input name="firstname" type="text" class="form-control from-control-lg" id="firstname" placeholder="First name">
                    </div>

                    <div class="col">
                        <label for="lastname">Last name</label>
                        <input name="lastname" type="text" class="form-control from-control-lg" id="lastname" placeholder="Last name">
                    </div>
                </div>

                 <div class="form-group">
                    <label for="image1">Add image</label>
                    <input type="file" class="form-control form-control-lg" id="image1" name="image1">
                </div>

                <div class="form-group">
                    <label for="image2">Add image</label>
                    <input type="file" class="form-control form-control-lg" id="image2" name="image2">
                </div>

                <div class="form-group">
                    <label for="image3">Add image</label>
                    <input type="file" class="form-control form-control-lg" id="image3" name="image3">
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
                    <input name="area" type="text" class="form-control from-control-lg" id="area" placeholder="Area name">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="ac1">City</label>
                        <input name="city" type="text" class="autocomplete form-control from-control-lg" id="ac1">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="ac2">State</label>
                        <input name="state" type="text" class="autocomplete form-control from-control-lg" id="ac2">
                    </div>

                   <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input name="zip" type="text" class="form-control from-control-lg" id="inputZip">
                    </div>
                </div>

                <div class="form-group">
                    <label for="propertyname">Property name</label>
                    <input name="propertyname" type="text" class="form-control from-control-lg" id="propertyname" placeholder="Property name">
                </div>

                <div class="form-group">
                    <label for="rent">Rent</label>
                    <input name="rent" type="text" class="form-control from-control-lg" id="rent" placeholder="Only in numbers">
                </div>

                <div class="form-group">
                    <label for="advance">Advance amount</label>
                    <input name="advance" type="text" class="form-control from-control-lg" id="advance" placeholder="Only in numbers">
                </div>

                  <div class="form-group col-md-4">
                    <label for="type">Property type</label>
                    <select name="type" id="type" class="form-control from-control-lg">
                        <option value="pg" selected>PG</option>
                        <option value="home">Home</option>
                    </select>
                </div> 

                <div class="form-group col-md-4">
                    <label for="forgender">Property for</label>
                    <select name="for" id="forgender" class="form-control from-control-lg">
                        <option value="male" selected>Male</option>
                        <option value="female">Female</option>
                        <option value="both">Both</option>
                        <option value="others">Others</option>
                    </select>
                </div> 

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Add description</label>
                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div> 

                <button type="submit" class="btn btn-primary btn-lg btn-c align-center">Submit</button>
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

initialize();
	</script>




@endsection
