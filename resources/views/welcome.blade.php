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
                            <div id="ifHome1" style="display:block;">
                                    <label for="forgender">Property for</label>
                                    <select name="for" id="forgender" class="form-control from-control-lg">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="both">Both</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>

                                <div id="ifHome" style="display:none;">
                                    <label for="bhk">Select </label>
                                    <select name="bhk" id="forgender" class="form-control from-control-lg">
                                        <option value="1 BHk">1 BHK</option>
                                        <option value="2 BHK">2 BHK</option>
                                        <option value="3 BHK">3 BHK</option>
                                        <option value="3+ BHK">3+ BHK</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-c">Submit</button>
                </form>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </section>

<script>
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
