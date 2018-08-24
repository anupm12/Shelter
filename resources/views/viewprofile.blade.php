@extends('layouts.app') @section('content')

<div class="container">
    <!-- <img src="..." class="rounded float-right" alt="..."> -->

    <div class="row">
        <div class="col-md-2">
        </div>

        <div class="col-md-8">
            <h1>User details</h1>
            <p>User name: {{ $profile -> name }} </p>
            <p>Email: {{ $profile -> email }} </p>
        </div>

        <div class="col-md-2">
        </div>

    </div>

    <div class="row">
        <div class="col-md-2">
        </div>

        <div class="col-md-8">
            <h1>All advertisements</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Propertyname</th>
                        <th scope="col">Area</th>
                        <th scope="col">Update</th>
                    </tr>
                </thead>
                @foreach ($owners as $owner)
                <tbody>
                    <tr>
                        <td scope="row">{{ $owner -> propertyname }}</td>
                        <td>{{ $owner -> area }}</td>
                        <td><a class="btn btn-primary btn-xs" href=" {{ route('editadvertisement') }} ">EDIT</a></td>
                    </tr>
                </tbody>
            </table>
            @endforeach
        </div>

        <div class="col-md-2">
        </div>
    </div>
</div>




@endsection
