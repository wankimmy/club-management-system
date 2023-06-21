@extends('layouts.admin')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="font-weight: bold;">Club Management</h1>
          </div>
          
        </div>
      </div>
    </div>

    <div class="content">
       <div class="container-fluid">
      <div class="card">
  <div class="card-body">
    
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
       

    </tbody>
    </table>
  
    
</div>
</div>
</div>
</div>

@endsection@extends('layouts.admin')
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
       

    </tbody>
    </table>
  
    
</div>
</div>
</div>
</div>

@endsection