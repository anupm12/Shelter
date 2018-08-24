@extends('layouts.app') @section('content')

<div class="container py-5 my-5">
    <div class="row">

        @if(count($owners))
        @foreach ($owners as $owner)
        <div class="col-md-4">
            <div class="card card-c">
                <img class="card-img-top" src="{{ $owner -> image1 }}" alt="error">
                <div class="card-body">
                    <h5 class="card-title">{{ $owner -> propertyname }}</h5>
                    <small class="card-text">{{ $owner -> address2 }}, </small>
                    <small class="card-text">{{ $owner -> area }}</small>
                    <div class="display-c row" >
                        <div class="com-md-12">
                        <p class="card-text card-text-c display-3"><img src=" {{ asset('Images/rupee.svg') }} " alt=""> {{ $owner -> rent }} </p>
                    </div>
                    </div>
                    <a href=" {{ route('single',['id' => $owner -> id]) }} " class="btn btn-primary btn-c float-right">Know more</a>
                </div>
            </div>
         </div>
        @endforeach

         @else
            <h2>No Results ☹️</h2>
         @endif
    </div>
</div>

@endsection
