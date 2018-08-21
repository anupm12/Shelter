@extends('layouts.app') @section('content')


<section class="container py-5 my-5">
    <div class="row">


        <div class="col-md-2">
        </div>


        <div class="col-md-8">

            <form acton="" method="post" enctype="multipart/form-data">
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
                        <label for="inputCity">City</label>
                        <input name="city" type="text" class="form-control from-control-lg" id="inputCity">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select name="state" id="inputState" class="form-control from-control-lg">
                            <option value="1" selected>Karnataka</option>
                            <option value="2">...</option>
                        </select>
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
                        <option value="1" selected>PG</option>
                        <option value="2">Home</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="forgender">Property for</label>
                    <select name="for" id="forgender" class="form-control from-control-lg">
                        <option value="1" selected>Male</option>
                        <option value="2">Female</option>
                        <option value="2">Others</option>
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



@endsection
