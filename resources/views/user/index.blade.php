@extends('layouts.admin')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             @if (Auth::user()->user_type == '1'|| Auth::user()->user_type == '2')
            <h1 class="m-0 text-dark">User Management</h1>
            @else
             <h1 class="m-0 text-dark">Profile</h1>
              @endif
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
    @if (Auth::user()->user_type == '1'|| Auth::user()->user_type == '2')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-dark" href="{{ url('user/create') }}"> Create New User</a>
            </div>
        </div>
    </div>
    @endif
    
   <br>
    <table class="table table-bordered" id="table">
        <thead>
        <tr>
          <th></th>
            <th>No</th>
            <th style="width: 20%;">Picture</th>
            <th>Name</th>
            <th>Email</th>
            <th>Type</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
       
        @foreach ($User as $key => $Users)
        <tr>
          <td></td>
            <td>{{ $key+1 }}</td>
            <td><img src="{{URL::asset('/uploads/'.'/'.$Users->profile_photo_path)}}" style="width: 100%;"></td>
            <td>{{ $Users->name }}</td>
           <td>{{ $Users->email }}</td>
            <?php if ($Users->user_type == 1):?>
            <td>Admin</td>
            <?php elseif ($Users->user_type == 2):?>
            <td>Committee</td>
            <?php else:?>
            <td>Member</td>
            <?php endif;?>

            <td>
                <form action="{{ url('user/destroy',$Users->id) }}" method="POST">
   
            
                  <a class="btn btn-success" href="{{ url('user/show',$Users->id) }}">View</a>
                
                    <a class="btn btn-primary" href="{{ url('user/edit',$Users->id) }}">Edit</a>
   

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