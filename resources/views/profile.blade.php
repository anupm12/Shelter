@extends('layouts.app')
@section('content')

<div class="container">
    <!-- <img src="..." class="rounded float-right" alt="..."> -->
    
    <div class="row">
        <div class="col-md-2">
        </div>

        <div class="col-md-8">
        <h1>User details</h1>
        <p>User name: {{ $profile ->  }} </p>
        <p>User name: {{ $profile ->  }} </p>
        </div>

        <div class="col-md-2">
        </div>
        
    </div>
</div>




@endsection