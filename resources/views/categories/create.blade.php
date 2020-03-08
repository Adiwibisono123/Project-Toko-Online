@extends('layouts.master')


@section('content')
@section('style')
    
@endsection
@section('body')
<div class="col-md-8">

    @if(session('status'))
      <div class="alert alert-success">
          {{session('status')}}
      </div>
    @endif 

        <form 
          enctype="multipart/form-data" 
          class="bg-white shadow-sm p-3 mt-4" 
          action="{{route('categories.store')}}" 
          method="POST">
      
          @csrf
      
          <label>Category name</label><br>
          <input 
            type="text" 
            class="form-control {{$errors->first('name') ? "is-invalid" : "" }}"
            value="{{old('name')}}" 
            name="name">
            <div class="invalid-feedback">
                {{$errors->first('name')}}
            </div>
          <br>
      
          <label>Category image</label>

          <input 
            type="file" 
            class="form-control {{$errors->first('image') ? "is-invalid" : "" }}"
            name="image"/>
            <div class="invalid-feedback">
              {{$errors->first('image')}}
            </div>
      
          <br>
      
          <input 
            type="submit" 
            class="btn btn-primary" 
            value="Save"/>
          <a href="{{ url('/categories') }}" class="btn btn-danger">Cancel</a>
      
        </form>
      </div>
      @endsection
@endsection