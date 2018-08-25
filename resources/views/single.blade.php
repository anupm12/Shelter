@extends('layouts.app') @section('content')
<!-- <p> {{ $single -> description }} </p> -->




<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active item">
                        <img class="d-block w-100 img-fluid" src="{{ asset($single -> image1)}}?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
                    </div>
                    <div class="carousel-item item">
                        <img class="d-block w-100 img-fluid" src="{{ asset($single -> image2)}}?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
                    </div>
                    <div class="carousel-item item">
                        <img class="d-block w-100 img-fluid" src="{{ asset($single -> image3)}}?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header">Featured</h5>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-c btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
