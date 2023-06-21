@extends('layouts.admin')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="font-weight: bold;">Activity Management</h1>
          </div>
          
        </div>
      </div>
    </div>

    <div class="content">
       <div class="container-fluid">
      <div class="card">
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