@extends('layouts.admin')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="font-weight: bold;">Participants</h1>
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
              <div class="form-group">
                <label for="inputStatus">Choose event:</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>Goodvibes</option>
                  <option>UiTM Fiesta</option>
                </select>
              </div>
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