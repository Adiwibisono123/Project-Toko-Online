@extends('layouts.master')

@section('content')
@section('style')
    
@endsection
@section('body')
    <div class="col-md-8 mt-4">
        <div class="card">
            <div class="card-body mt-3">
                <b>Name:</b> <br/>
                {{$user->name}}
                <br><br>

                @if($user->avatar)
                <img src="{{asset('storage/'. $user->avatar)}}" width="128px"/>
                @else 
                    No avatar
                @endif 

                <br>
                <br>
                <b>Username:</b><br>
                {{$user->email}}

                <br>
                <br>
                <b>Phone number</b> <br>
                {{$user->phone}}

                <br><br>
                <b>Address</b> <br>
                {{$user->address}}

                <br>
                <br>
                <b>Roles:</b> <br>
                @foreach (json_decode($user->roles) as $role)
                    &middot; {{$role}} <br>
                @endforeach
                <a href="{{route('users.index')}}" class="btn btn-danger btn-sm mt-3">cancel</a>
            </div>   
        </div>
    </div>
    @endsection
@endsection