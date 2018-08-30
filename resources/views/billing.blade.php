@extends('layouts.app') @section('content')

<div class="container">
    <!-- <img src="..." class="rounded float-right" alt="..."> -->

    {{-- <div class="row">
        <div class="col-md-2">
        </div>

        <div class="col-md-8">
            <h3>User details</h3>
            <p class="pl-4">User name: {{ $profile -> name }} </p>
            <p class="pl-4">Email: {{ $profile -> email }} </p>
        </div>

        <div class="col-md-2">
        </div>

    </div> --}}


    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 card">
            <table class="table table-c">
                <thead>
                    <tr>
                        <th scope="col">User Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Property name</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                @if(Auth::user()->isowner) @foreach($billing as $bill)
                    <tr>
                        <td>{{ ucfirst($bill -> username) }}</td>
                        <td>{{ $bill -> phonenumber }}</td>
                        <td>{{ ucfirst($bill -> propertyname) }}</td>
                        <td>{{ $bill -> amount }}</td>
                    </tr>
                    @endforeach @endif
                </tbody>
            </table>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>




@endsection
