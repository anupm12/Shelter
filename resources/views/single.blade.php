@extends('layouts.app') @section('content')
<!-- <p> {{ $single -> description }} </p> -->




<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <img src="{{ $single -> image1 }}" class="rounded float-left" alt="...">
            <img src="{{ $single -> image2 }}" class="rounded mx-auto d-block" alt="...">
            <img src="{{ $single -> image3 }}" class="rounded float-right" alt="...">
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

@endsection
