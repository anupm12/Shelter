@extends('layouts.app') @section('content')

<div class="container">
    <!-- <img src="..." class="rounded float-right" alt="..."> -->

    <div class="row">
        <div class="col-md-2">
        </div>

        <div class="col-md-8">
            <h2>User details</h2>
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
            <table class="table table-c">
                <thead>
                    <tr>
                        <th scope="col">Propertyname</th>
                        <th scope="col">Area</th>
                        <th scope="col">Update</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <div class="col-md-2">
        </div>
    </div>



    @if(Auth::user()->isowner) @foreach($owners as $owner)
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <table class="table table-c">
                <tbody>
                    <tr>
                        <td class="td-align">{{ $owner -> propertyname }}</td>
                        <td class="td-align">{{ $owner -> area }}</td>
                        <td class="td-align">
                            <a class="btn btn-primary btn-xs btn-c mx-3" href=" {{ route('editadvertisement',['id'=>$owner->id]) }} ">EDIT</a>
                            <a class="btn btn-primary btn-xs btn-c" href=" {{ route('owner.delete',['id'=>$owner->id]) }} ">DELETE</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-2">
        </div>
    </div>
    @endforeach @endif
</div>




@endsection
