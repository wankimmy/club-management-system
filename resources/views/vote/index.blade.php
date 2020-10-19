@extends('layouts.admin')
@section('content')

<?php 
use App\Models\User;
use App\Models\Vote;
?>

 @if (Auth::user()->user_type == '1'|| Auth::user()->user_type == '2')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Nominees</h1>
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
                <a class="btn btn-dark" href="{{ url('vote/create') }}"> Create New Nominees</a>
            </div>
        </div>
    </div>
    
   <br>
    <table class="table table-bordered" id="table">
        <thead>
        <tr>
          <th></th>
            <th>No</th>
            <th>Nominee 1</th>
            <th>Nominee 2</th>
            <th>Nominee 3</th>
            <th>Nominee 4</th>
            <th>Nominee 5</th>
            <th>Nominee 6</th>
            <th>Position</th>
            <th>Status</th>
            <th style="width: 50%">Action</th>
        </tr>
    </thead>
    <tbody>
       
        @foreach ($Nominees as $key => $value)
        <?php 
         $user1 = User::where('id',$value->committee_id1)->first(); 
         $user2 = User::where('id',$value->committee_id2)->first();
         $user3 = User::where('id',$value->committee_id3)->first();
         $user4 = User::where('id',$value->committee_id4)->first();
         $user5 = User::where('id',$value->committee_id5)->first();
         $user6 = User::where('id',$value->committee_id6)->first();
        ?>
        <tr>
          <td></td>
           <td>{{ $key+1 }}</td>
           <td>
            <center>
            {{$user1->name}}
              <br><br>
              <img src="{{URL::asset('/uploads'.'/'.$user1->profile_photo_path)}}" style="width: 50%;">
           </center>
         </td>
           <td>
            <center>
               {{$user2->name}}
              <br><br>
              <img src="{{URL::asset('/uploads'.'/'.$user2->profile_photo_path)}}" style="width: 50%;">
            </center>
          </td>
           <td>
             @if($user3 != NULL)
            <center>
            {{$user3->name}}
             <br><br>
              <img src="{{URL::asset('/uploads'.'/'.$user3->profile_photo_path)}}" style="width: 50%;">
            </center>
            @else

            @endif
          </td>
           <td>
             @if($user4 != NULL)
            <center>
              {{$user4->name}}
             <br><br>
              <img src="{{URL::asset('/uploads'.'/'.$user4->profile_photo_path)}}" style="width: 50%;"></center>
            @else

            @endif
          </td>
           <td>
             @if($user5 != NULL)
            <center>
              {{$user5->name}}
             <br><br>
              <img src="{{URL::asset('/uploads'.'/'.$user5->profile_photo_path)}}" style="width: 50%;"></center>
            @else

            @endif
          </td>
           <td>
             @if($user6 != NULL)
            <center>
              {{$user6->name}}
             <br><br>
              <img src="{{URL::asset('/uploads'.'/'.$user6->profile_photo_path)}}" style="width: 50%;"></center>
            @else

            @endif
          </td>
           <td>{{ $value->position }}</td>
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
                <form action="{{ url('vote/destroy',$value->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ url('vote/edit',$value->id) }}">Edit</a>
                     <a class="btn btn-info" href="{{ url('vote/result',$value->id) }}">View Result</a>
                     @if ($value->status == '1') 
                    <a class="btn btn-success" href="{{ url('vote/status/'.$value->id.'/2') }}">Approve</a>
                    <a class="btn btn-warning" href="{{url('vote/status/'.$value->id.'/3') }}">Reject</a>
                   @elseif ($value->status == '2')
                    <a class="btn btn-warning" href="{{url('vote/status/'.$value->id.'/3') }}">Reject</a>
                   @else
                    <a class="btn btn-success" href="{{ url('vote/status/'.$value->id.'/2') }}">Approve</a>
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
 @endif

@if (Auth::user()->user_type == '3')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Vote</h1>
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
            <th>Nominee 1</th>
            <th>Nominee 2</th>
            <th>Nominee 3</th>
            <th>Nominee 4</th>
            <th>Nominee 5</th>
            <th>Nominee 6</th>
            <th>Position</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
       
        @foreach ($Nominees as $key => $value)
        <?php 
         $user1 = User::where('id',$value->committee_id1)->first(); 
         $user2 = User::where('id',$value->committee_id2)->first();
         $user3 = User::where('id',$value->committee_id3)->first();
         $user4 = User::where('id',$value->committee_id4)->first();
         $user5 = User::where('id',$value->committee_id5)->first();
         $user6 = User::where('id',$value->committee_id6)->first();
         $vote = Vote::where('user_id', Auth::user()->id)->where('nominee_id',$value->id)->first();
        ?>
        <tr>
          <td></td>
           <td>{{ $key+1 }}</td>
           <td>
            <center>
            {{$user1->name}}
              <br><br>
              <img src="{{URL::asset('/uploads'.'/'.$user1->profile_photo_path)}}" style="width: 50%;">
           </center>
         </td>
           <td>
            <center>
               {{$user2->name}}
              <br><br>
              <img src="{{URL::asset('/uploads'.'/'.$user2->profile_photo_path)}}" style="width: 50%;">
            </center>
          </td>
           <td>
             @if($user3 != NULL)
            <center>
            {{$user3->name}}
             <br><br>
              <img src="{{URL::asset('/uploads'.'/'.$user3->profile_photo_path)}}" style="width: 50%;">
            </center>
            @else

            @endif
          </td>
           <td>
             @if($user4 != NULL)
            <center>
              {{$user4->name}}
             <br><br>
              <img src="{{URL::asset('/uploads'.'/'.$user4->profile_photo_path)}}" style="width: 50%;"></center>
            @else

            @endif
          </td>
           <td>
             @if($user5 != NULL)
            <center>
              {{$user5->name}}
             <br><br>
              <img src="{{URL::asset('/uploads'.'/'.$user5->profile_photo_path)}}" style="width: 50%;"></center>
            @else

            @endif
          </td>
           <td>
             @if($user6 != NULL)
            <center>
              {{$user6->name}}
             <br><br>
              <img src="{{URL::asset('/uploads'.'/'.$user6->profile_photo_path)}}" style="width: 50%;"></center>
            @else

            @endif
          </td>
           <td>{{ $value->position }}</td>
    
            <td>
              @if($vote == NULL)
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#Modal{{$value->id}}">Vote</button>
              @else
              <span class="badge bg-success">DONE</span>
              @endif
            </td>
        </tr>

      <div class="modal fade" id="Modal{{$value->id}}">
        <div class="modal-dialog">
          <form id="formvote" enctype="multipart/form-data" method="post" action="{{ url('/vote/voting') }}">
         @csrf
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Vote {{$value->position}} Position</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
         <div class="form-group">
              <label for="quantity">Nominees:</label>
               <input type="hidden" name="nominee_id" value="{{ $value->id }}">
              <!-- <input type="text" class="form-control" name="product_status"/> -->
              <select class="form-control select2" name="nominee" style="width: 100%;">
                    <option value="">Please Select Nominees</option>
                    <option value="{{$value->committee_id1}}">{{$user1->name}}</option>
                    <option value="{{$value->committee_id2}}">{{$user2->name}}</option>
                     @if($user3 != NULL)
                    <option value="{{$value->committee_id3}}">{{$user3->name}}</option>
                    @endif
                     @if($user4 != NULL)
                    <option value="{{$value->committee_id4}}">{{$user4->name}}</option>
                     @endif
                     @if($user5 != NULL)
                    <option value="{{$value->committee_id5}}">{{$user5->name}}</option>
                     @endif
                     @if($user6 != NULL)
                    <option value="{{$value->committee_id6}}">{{$user6->name}}</option>
                     @endif
                  </select>
          </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
           </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
        @endforeach
    </tbody>
    </table>
  
    
</div>
</div>
</div>
</div>
@endif

@endsection