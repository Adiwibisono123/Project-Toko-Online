@extends('layouts.master')

@section('content')
@section('style')
    
@endsection
@section('body')
    <div class="d-flex flex-row justify-content-center">
        <div class="col-md-6 text-center mt-4">
            <div class="alert alert-danger">
                <h1>403</h1>
                <h4>{{$exception->getMessage()}}</h4>
            </div>
        </div>
    </div>
    @endsection
@endsection