@extends('layouts.app') @section('content')

<div class="container py-5 my-5">
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
        @foreach ($owners as $owner)
            <div class="card card-c">
                <img class="card-img-top" src="{{ $owner -> image1 }}" alt="error">
                <div class="card-body">
                    <h5 class="card-title">{{ $owner -> propertyname }}</h5>
                    <p class="card-text">{{ $owner -> address1 }}</p>
                    <p class="card-text"> {{ $owner -> rent }} </p>
                    <a href="#" class="btn btn-primary">Know more</a>
                </div>
            </div><hr>
            @endforeach
        </div> 
        <div class="col-md-2">

        </div>
    </div>
</div>

@endsection
