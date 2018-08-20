@extends('layouts.app') @section('content')


<section class="container py-5 my-5">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <form action="/action_page.php">
                <input type="file" name="pic" accept="image/*">
                <input type="submit">
            </form>
            <form>

                <div class="form-row">
                    <div class="col">
                        <label for="firstname">First name</label>
                        <input type="text" class="form-control from-control-lg" id="firstname" placeholder="First name">
                    </div>
                    <div class="col">
                        <label for="lastname">Last name</label>
                        <input type="text" class="form-control from-control-lg" id="lastname" placeholder="Last name">
                    </div>
                </div>


                <div class="form-group py-3">
                    <label for="inputAddress">Address line 1</label>
                    <input type="text" class="form-control from-control-lg" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address line 2</label>
                    <input type="text" class="form-control from-control-lg" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-group">
                    <label for="area">Area</label>
                    <input type="text" class="form-control from-control-lg" id="area" placeholder="Area name">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control from-control-lg" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control from-control-lg">
                            <option selected>Karnataka</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control from-control-lg" id="inputZip">
                    </div>
                </div>
                <div class="form-group">
                    <label for="propertyname">Property name</label>
                    <input type="text" class="form-control from-control-lg" id="propertyname" placeholder="Property name">
                </div>
                <div class="form-group">
                    <label for="rent">Rent</label>
                    <input type="text" class="form-control from-control-lg" id="rent" placeholder="Only in numbers">
                </div>
                <div class="form-group">
                    <label for="advance">Advance amount</label>
                    <input type="text" class="form-control from-control-lg" id="advance" placeholder="Only in numbers">
                </div>
                <div class="form-group col-md-4">
                    <label for="type">Property type</label>
                    <select id="type" class="form-control from-control-lg">
                        <option selected>PG</option>
                        <option>Home</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="forgender">Property for</label>
                    <select id="forgender" class="form-control from-control-lg">
                        <option selected>Male</option>
                        <option>Female</option>
                        <option>Others</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Add description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-c align-center">Submit</button>

            </form>
        </div>
        <div class="col-md-2">
        </div>
</section>



@endsection
