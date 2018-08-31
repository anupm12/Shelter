@extends('layouts.app') @section('content')

<div class="container full">
    <!-- <img src="..." class="rounded float-right" alt="..."> -->

    <div class="row user-details">
        <div class="col-md-2">
        </div>

        <div class="col-md-8">
            <h3>User details</h3>
            <p class="pl-4">User name: {{ $profile -> name }} </p>
            <p class="pl-4">Email: {{ $profile -> email }} </p>
        </div>

        <div class="col-md-2">
        </div>

    </div>


    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <table class="table table-c">
                <thead>
                    <tr>
                        <th scope="col">Property name</th>
                        <th scope="col">Area</th>
                        <th scope="col">Update</th>
                    </tr>
                </thead>
                <tbody>
                @if(Auth::user()->isowner) @foreach($owners as $owner)
                    <tr>
                        <td>{{ $owner -> propertyname }}</td>
                        <td>{{ $owner -> area }}</td>
                        <td>
                        <a href=" {{ route('editadvertisement',['id'=>$owner->id]) }} " class="badge badge-c badge-light p-1">Edit</a>
                        <a href=" {{ route('owner.delete',['id'=>$owner->id]) }} " class="badge badge-c badge-light p-1">Delete</a>
                        </td>
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
