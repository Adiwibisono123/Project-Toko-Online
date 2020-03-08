@extends('layouts.master')

@section('content')
@section('style')
    
@endsection
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
                      <h4 class="page-title">Dashboard</h4>
                  </div>
              </div>
          </div>     
          <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action active">
                List
              </button>
              <div class="card-body">
                  
            <div class="input-group">
                <input name="keyword" type="text" value="{{Request::get('keyword')}}" class="form-control" placeholder="Filter by title">
                <div class="input-group-append">
                  <input type="submit" value="Filter" class="btn btn-primary">
                </div>
                <div class="col-md-4">
                    <ul class="nav nav-pills card-header-pills">
                      <li class="nav-item">
                        <a class="nav-link {{Request::get('status') == NULL && Request::path() == 'books' ? 'active' : ''}} ml-3" href="{{route('books.index')}}">All</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link {{Request::get('status') == 'publish' ? 'active' : '' }}" href="{{route('books.index', ['status' => 'publish'])}}">Publish</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{Request::get('status') == 'draft' ? 'active' : '' }}" href="{{route('books.index', ['status' => 'draft'])}}">Draft</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{Request::path() == 'books/trash' ? 'active' : ''}}" href="{{route('books.trash')}}">Trash</a>
                      </li>
                    </ul>
                </div>
            </div>

            </form>
            <a href="{{ url('books/create') }}" class="btn btn-primary mt-2"><i class="mdi mdi-plus-circle mr-1">Add Book</i></a>
          </div>
          @if(session('status'))
            <div class="alert alert-success">
              {{session('status')}}
            </div>
          @endif 
          
        </div>

      <hr class="my-3">

      {{-- <div class="row mb-3">
        <div class="col-md-12 text-left">
          <a
            href="{{route('books.create')}}"
            class="btn btn-primary"
          >Create book</a>
        </div>
      </div> --}}

      <table class="table table-bordered table-stripped table-hover">
        <thead>
          <tr>
            <th class="text-center"><b>Cover</b></th>
            <th class="text-center"><b>Title</b></th>
            <th class="text-center"><b>Author</b></th>
            <th class="text-center"><b>Status</b></th>
            <th class="text-center"><b>Categories</b></th>
            <th class="text-center"><b>Stock</b></th>
            <th class="text-center"><b>Price</b></th>
            <th class="text-center"><b>Action</b></th>
          </tr>
        </thead>
        <tbody>
          @foreach($books as $book)
            <tr>
              <td>
                @if($book->cover)
                  <img src="{{asset('storage/' . $book->cover)}}" width="96px"/>
                @endif
              </td>
              <td>{{$book->title}}</td>
              <td>{{$book->author}}</td>
              <td>
                @if($book->status == "DRAFT")
                  <span class="badge bg-dark text-white">{{$book->status}}</span>
                @else 
                  <span class="badge badge-success">{{$book->status}}</span>
                @endif 
              </td>
              <td>
                <ul class="pl-3">
                @foreach($book->categories as $category)
                  <li>{{$category->name}}</li>  
                @endforeach
                </ul>
              </td>
              <td>{{$book->stock}}</td>
              <td>{{$book->price}}</td>
              <td>
                  <a
                   href="{{route('books.edit', [$book->id])}}"
                   class="btn btn-info btn-sm"
                  > Edit </a>

                  <form
                    method="POST"
                    class="d-inline"
                    onsubmit="return confirm('Move book to trash?')"
                    action="{{route('books.destroy', [$book->id])}}"
                  >

                  @csrf 
                  <input 
                    type="hidden" 
                    value="DELETE"
                    name="_method">

                  <input 
                    type="submit" 
                    value="Trash" 
                    class="btn btn-danger btn-sm">

                  </form>

              </td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="10">
              {{$books->appends(Request::all())->links()}}
            </td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
  @endsection
@endsection