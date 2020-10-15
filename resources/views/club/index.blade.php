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
  
                  <a class="btn btn-success" href="{{ url('club/show',$value->id) }}">View</a>
                
                    <a class="btn btn-primary" href="{{ url('club/edit',$value->id) }}">Edit</a>
   
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
            <th>Poster</th>
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
            <td>{{ $value->poster }}</td>
           <td>{{ $value->desc }}</td>
           <td>{{ $value->date }}</td>
           <td>{{ $value->time }}</td>
           <td>{{ $value->status }}</td>
            <td>
                <form action="{{ url('activity/destroy',$value->id) }}" method="POST">
  
                  <a class="btn btn-success" href="{{ url('activity/show',$value->id) }}">View</a>
                
                    <a class="btn btn-primary" href="{{ url('activity/edit',$value->id) }}">Edit</a>
   
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