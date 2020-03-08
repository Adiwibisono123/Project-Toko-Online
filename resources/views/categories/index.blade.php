@extends('layouts.master')

@section('style')
    
@endsection

@section('content')
@section('body')
<div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    {{-- <form class="form-inline">
                        <div class="form-group">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control border-white" id="dash-daterange">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-blue border-blue text-white">
                                        <i class="mdi mdi-calendar-range font-13"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-2">
                            <i class="mdi mdi-autorenew"></i>
                        </a>
                        <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-1">
                            <i class="mdi mdi-filter-variant"></i>
                        </a>
                    </form> --}}
                </div>
                <h4 class="page-title">Category List</h4>
            </div>
        </div>
    </div>     
    <div class="list-group">
    <button type="button" class="list-group-item list-group-item-action active">
      List
    </button>
    <div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('categories.index')}}">
                <div class="input-group">
                    <input 
                    type="text" 
                    class="form-control" 
                    placeholder="Filter by category name"
                    name="name">
                    <div class="input-group-append">
                    <input 
                        type="submit" 
                        value="Filter" 
                        class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-6">
            <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                <a class="nav-link active" href="{{route('categories.index')}}">Published</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('categories.trash')}}">Trash</a>
                </li>
            </ul>
        </div>
    </div>
    <hr class="my-3">

    @if(session('status'))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning">
                    {{session('status')}}
                </div>
            </div>
        </div>
    @endif 

    {{-- <div class="row">
        <div class="col-md-12 text-right">
            <a href="{{route('categories.create')}}" class="btn btn-primary">Create category</a>
        </div>
    </div>
    <br> --}}
    <a href="{{ url('categories/create') }}" class="btn btn-primary mb-2"><i class="mdi mdi-plus-circle mr-1">Add Category</i></a>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-stripped">
            <thead>
                <tr class="text-center">
                <th><b>Name</b></th>
                <th><b>Slug</b></th>
                <th><b>Image</b></th>
                <th><b>Actions</b></th>
                </tr>
            </thead>
    
            <tbody>
                @foreach ($categories as $category)
                <tr class="text-center">
                    <td>{{$category->name}}</td>
                    <td>{{$category->slug}}</td>
                    <td>
                    @if($category->image)
                        <img 
                         src="{{asset('storage/' . $category->image)}}" 
                         width="48px"/>
                    @else 
                        No image
                    @endif
                    </td>
                    <td>
                        <a 
                        href="{{route('categories.edit', [$category->id])}}"
                        class="btn btn-info btn-sm"> Edit</a>
                        <a 
                        href="{{route('categories.show', [$category->id])}}"
                        class="btn btn-primary"> Show </a>
                        <form 
                            class="d-inline"
                            action="{{route('categories.destroy', [$category->id])}}"
                            method="POST"
                            onsubmit="return confirm('Move category to trash?')"
                            >

                            @csrf 

                            <input 
                                type="hidden" 
                                value="DELETE" 
                                name="_method">

                           
                            <input 
                                type="submit" 
                                class="btn btn-danger btn-sm dripicons-trash"
                                value="Trash">

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
              <tr>
                <td colSpan="10">
                  {{$categories->appends(Request::all())->links()}}
                </td>
              </tr>
            </tfoot>
            </table>
        </div>
    </div>
    @endsection
@endsection