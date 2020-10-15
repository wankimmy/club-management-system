@extends('layouts.admin')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create Activity</h1>
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
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form enctype="multipart/form-data" method="post" action="{{ url('/activity/store') }}">
         @csrf

         <div class="form-group">
              <label for="name">Name :</label>
              <input type="text" class="form-control" name="name" id="name">
          </div>

        <div class="form-group">
              <label for="poster">Poster :</label>
              <input type="file" class="form-control" name="poster" id="poster">
          </div>
         
          <div class="form-group">
              <label for="start_date"> Start Date :</label>
              <input type="text" class="form-control datepicker" name="start_date" name="start_date">
          </div>
          <div class="form-group">
              <label for="start_time">Start Time:</label>
              <input type="text" class="form-control clockpicker" name="start_time" name="start_time">
          </div>

          <div class="form-group">
              <label for="end_date"> End Date :</label>
              <input type="text" class="form-control datepicker" name="end_date" name="end_date">
          </div>
          <div class="form-group">
              <label for="end_time">End Time:</label>
              <input type="text" class="form-control clockpicker" name="end_time" name="end_time">
          </div>

          <div class="form-group">
              <label for="desc">Description:</label>
              <input type="text" class="form-control" name="desc"/>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
    </div>
  </div>
@endsection