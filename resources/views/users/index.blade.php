@extends("layouts.master")
{{-- 
@section("title") Users list @endsection  --}}

@section('style')
    
@endsection

@section('content')

@section("body")
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
              
            {{-- <div class="input-group"> --}}
                {{-- <input name="keyword" type="text" value="{{Request::get('keyword')}}" class="form-control" placeholder="Filter by title">
                <div class="input-group-append">
                  <input type="submit" value="Filter" class="btn btn-primary">
                </div> --}}
          <form action="{{route('users.index')}}">
              <div class="row">
              <div class="col-md-6">
                  <input 
                    value="{{Request::get('keyword')}}" 
                    name="keyword" 
                    class="form-control" 
                    type="text" 
                    placeholder="Masukan email untuk filter..."/>
              </div>
          <div class="col-md-6">
          {{-- <input {{Request::get('status') == 'ACTIVE' ? 'checked' : ''}} 
            value="ACTIVE" 
            name="status" 
            type="radio" 
            class="form-control" 
            id="active">
            <label for="active">Active</label>
  
          <input {{Request::get('status') == 'INACTIVE' ? 'checked' : ''}} 
            value="INACTIVE" 
            name="status" 
            type="radio" 
            class="form-control" 
            id="inactive">
            <label for="inactive">Inactive</label> --}}
  
          <input 
            type="submit" 
            value="search" 
            class="btn btn-primary">
      </div>
      </div>
  </form>

  {{-- <div class="row">
      <div class="col-md-12 text-left mt-3">
          <a 
            href="{{route('users.create')}}" 
            class="btn btn-primary">Create user</a>
      </div>
  </div>
  <br>

  @if(session('status'))
    <div class="alert alert-success">
      {{session('status')}}
    </div>
  @endif --}}
  <a href="{{ url('users/create') }}" class="btn btn-primary mt-2 mb-2"><i class="mdi mdi-plus-circle mr-1">Add User</i></a>
            @if(session('status'))
              <div class="alert alert-success">
                {{session('status')}}
              </div>
            @endif 
  <table class="table table-bordered table-hover mt-3">
      <thead>
        <tr class="text-center">
          <th ><b>Name</b></th>
          <th><b>Username</b></th>
          <th><b>Email</b></th>
          <th><b>Avatar</b></th>
          <th><b>Status</b></th>
          <th><b>Action</b></th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
          <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->email}}</td>
            <td>
              @if($user->avatar)
                <img src="{{asset('storage/'.$user->avatar)}}" width="70px"/> 
              @else 
                N/A
              @endif

            </td>
            <td>
                @if($user->status == "ACTIVE")
                  <span class="badge badge-success">
                    {{$user->status}}
                  </span>
                @else 
                  <span class="badge badge-danger">
                    {{$user->status}}
                  </span>
                @endif
            </td>

            <td>
              <a class="btn btn-info text-white btn-sm" href="{{route('users.edit', [$user->id])}}">Edit</a>
              <a href="{{route('users.show', [$user->id])}}" class="btn btn-primary btn-sm">Detail</a>  
              
              <form 
                    onsubmit="return confirm('Delete this user permanently?')" 
                    class="d-inline" 
                    action="{{route('users.destroy', [$user->id])}}" 
                    method="POST">
                    @csrf
                    <input 
                      type="hidden" 
                      name="_method" 
                      value="DELETE">

                    <input 
                      type="submit" 
                      value="Delete" 
                      class="btn btn-danger btn-sm">
              </form>
            </td>
          </tr>
        @endforeach 
      </tbody>
      <tfoot>
          <tr>
              <td colspan=10>
                  {{$users->links()}}
              </td>
          </tr>
      </tfoot>
      
  </table>

@endsection 
@endsection