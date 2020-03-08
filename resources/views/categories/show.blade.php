@extends('layouts.master')

@section('title') Detail Category @endsection 

@section('content')
@section('style')
    
@endsection
@section('body')
  <div class="col-md-8">
    <div class="card">
      <div class="card-body">
        <label><b>Category name</b></label><br>
        {{$category->name}}
        <br><br>

        <label><b>Category slug</b></label><br>
        {{$category->slug}}
        <br><br>

        <label><b>Category image</b></label><br>
        @if($category->image)
          <img src="{{asset('storage/' . $category->image)}}" width="120px">
        @endif
        <div class="buttons">
            <a href="{{ url('/categories') }}" class="btn btn-primary mt-3">kembali</a>
        </div>
      </div>
      
    </div>
    
  </div>
  @endsection
@endsection 