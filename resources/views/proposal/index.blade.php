@extends('layouts.admin')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Proposal</h1>
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
                <a class="btn btn-dark" href="{{ url('proposal/create') }}"> Create New Proposal</a>
            </div>
        </div>
    </div>
    
   <br>
    <table class="table table-bordered" id="table">
        <thead>
        <tr>
          <th></th>
            <th>No</th>
            <!-- <th>Member</th> -->
            <th>Proposal</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
       
        @foreach ($Proposal as $key => $value)
        <tr>
          <td></td>
            <td>{{ $key+1 }}</td>
            <!-- <td>{{ $value->user_id }}</td> -->
           <td>{{ $value->propose }}</td>
           <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
           <td>{{ date('H:i:m', strtotime($value->created_at)) }}</td>
           <td> 
            @if ($value->status == '1')
            Pending
            @elseif ($value->status == '2')
            Approved
            @else
            Rejected
            @endif</td>
            <td>
                <form action="{{ url('proposal/destroy',$value->id) }}" method="POST">
  
                  <!-- <a class="btn btn-success" href="{{ url('proposal/show',$value->id) }}">View</a> -->
                
                    <a class="btn btn-primary" href="{{ url('proposal/edit',$value->id) }}">Edit</a>

                     @if ($value->status == '1' && Auth::user()->user_type == '1' || Auth::user()->user_type == '2') 
                    <a class="btn btn-success" href="{{ url('proposal/status/'.$value->id.'/2') }}">Approve</a>
                    <a class="btn btn-warning" href="{{url('proposal/status/'.$value->id.'/3') }}">Reject</a>
                   @elseif ($value->status == '2')
                    <a class="btn btn-warning" href="{{url('proposal/status/'.$value->id.'/3') }}">Reject</a>
                   @else
                    <a class="btn btn-success" href="{{ url('proposal/status/'.$value->id.'/2') }}">Approve</a>
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