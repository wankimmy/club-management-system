@extends('layouts.admin')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="font-weight: bold;">Club</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
       <div class="container-fluid">
      <div class="card ">
  <div class="card-body">
  
   <br>
    <div class="">
    <table class="table-auto w-100 text-sm text-left text-gray-500 dark:text-gray-400 border border-collapse rounded">
        <thead class="text-sm bg-gray text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
            <tr>
                <th class="border py-2 px-4">No</th>
                <th class="border py-2 px-4">Logo</th>
                <th class="border py-2 px-4">Name</th>
                <th class="border py-2 px-4">Description</th>
                @if (Auth::user()->user_type == '1' || Auth::user()->user_type == '2')
                <th class="border py-2 px-4">Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($Club as $key => $value)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="border py-2 px-4">{{ $key+1 }}</td>
                <td class="border py-2 px-4">{{ $value->club_picture }}</td>
                <td class="border py-2 px-4">{{ $value->club_name }}</td>
                <td class="border py-2 px-4">{{ $value->club_desc }}</td>
                @if (Auth::user()->user_type == '1' || Auth::user()->user_type == '2')
                <td class="border py-2 px-4">
                    <form action="{{ url('club/destroy', $value->id) }}" method="POST">
                        <!-- <a class="btn btn-success" href="{{ url('club/show', $value->id) }}">View</a> -->
                        <button class="bg-blue hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Edit</button>
                        @csrf
                        @method('DELETE')
                        <!-- <button class="btn btn-danger" type="submit" class="text-danger">Delete</button> -->
                    </form>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


  
    
</div>
</div>
</div>
</div>

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="font-weight: bold;">Activities</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
       <div class="container-fluid">
      <div class="card ">
  <div class="card-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <button class="bg-black hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" href="{{ url('activity/create') }}"> Create New Activity</button>
            </div>
        </div>
    </div>
    
   <br>
    <table class="table table-bordered" id="table">
        <thead>
        <tr>
          <th></th>
            <th>No</th>
            <th style="width: 20%;">Poster</th>
            <th>Description</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
       
        @foreach ($Activities as $key => $value)
        <tr>
          <td></td>
            <td>{{ $key+1 }}</td>
            <td><img src="{{URL::asset('/uploads/'.'/'.$value->poster)}}" style="width: 100%;"></td>
           <td>{{ $value->desc }}</td>
           <td>{{ $value->start_date }}</td>
           <td>{{ $value->start_time }}</td>
           <td>
            @if ($value->status == '1')
            Pending
            @elseif ($value->status == '2')
            Approved
            @else
            Rejected
            @endif
          </td>
            <td>
                <form action="{{ url('activity/destroy',$value->id) }}" method="POST">
                  <a class="btn btn-info" href="{{ url('activity/show',$value->id) }}">View</a>
                  <a class="btn btn-primary" href="{{ url('activity/edit',$value->id) }}">Edit</a>

                   @if ($value->status == '1' && Auth::user()->user_type == '1' || Auth::user()->user_type == '2') 
                    <a class="btn btn-success" href="{{ url('activity/status/'.$value->id.'/2') }}">Approve</a>
                    <a class="btn btn-warning" href="{{url('activity/status/'.$value->id.'/3') }}">Reject</a>
                   @elseif ($value->status == '2')
                    <a class="btn btn-warning" href="{{url('activity/status/'.$value->id.'/3') }}">Reject</a>
                   @else
                    <a class="btn btn-success" href="{{ url('activity/status/'.$value->id.'/2') }}">Approve</a>
                   @endif
                 
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" class="text-danger">Delete</button>
                   
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
  
    
</div>
</div>
</div>
</div>

@endsection