@extends('layouts.admin')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Club</h1>
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
    <table class="table table-bordered" id="table">
        <thead>
        <tr>
          <th></th>
            <th>No</th>
            <th>Logo</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
       
        @foreach ($Club as $key => $value)
        <tr>
          <td></td>
            <td>{{ $key+1 }}</td>
            <td>{{ $value->club_picture }}</td>
           <td>{{ $value->club_name }}</td>
           <td>{{ $value->club_desc }}</td>
            <td>
                <form action="{{ url('club/destroy',$value->id) }}" method="POST">
  
                  <!-- <a class="btn btn-success" href="{{ url('club/show',$value->id) }}">View</a> -->
                
                    <a class="btn btn-primary" href="{{ url('club/edit',$value->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
                    <!-- <button class="btn btn-danger" type="submit" class="text-danger">Delete</button> -->
                   
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

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Activities</h1>
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
                <a class="btn btn-dark" href="{{ url('activity/create') }}"> Create New Activity</a>
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

                   @if ($value->status == '1' && Auth::user()->role == '1' || Auth::user()->role == '2') 
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