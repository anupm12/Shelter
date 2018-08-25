@extends('layouts.app') @section('content')




    <section class="hero-section container py-5 my-5">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <form action="{{ route('results') }}" method="GET">
                    <div class="form-group">
                        <input name="query" type="text" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter city">
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
            <div class="col-md-4">

            </div>
        </div>
    </section>







@endsection
