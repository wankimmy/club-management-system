@extends('layouts.admin')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create Nominees</h1>
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
      <form enctype="multipart/form-data" method="post" action="{{ url('/vote/store') }}">
         @csrf

         <div class="form-group">
              <label for="quantity">Nominee 1:</label>
              <!-- <input type="text" class="form-control" name="product_status"/> -->
              <select class="form-control select2" name="committee_id1" style="width: 100%;">
                    <option  value="">Please Select Nominee</option>
                    @foreach($User as $key => $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                  </select>
          </div>

          <div class="form-group">
              <label for="quantity">Nominee 2:</label>
              <!-- <input type="text" class="form-control" name="product_status"/> -->
              <select class="form-control select2" name="committee_id2" style="width: 100%;">
                    <option value="">Please Select Nominee</option>
                    @foreach($User as $key => $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                  </select>
          </div>

          <div class="form-group">
              <label for="quantity">Nominee 3:</label>
              <!-- <input type="text" class="form-control" name="product_status"/> -->
              <select class="form-control select2" name="committee_id3" style="width: 100%;">
                    <option  value="">Please Select Nominee</option>
                    @foreach($User as $key => $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                  </select>
          </div>

          <div class="form-group">
              <label for="quantity">Nominee 4:</label>
              <!-- <input type="text" class="form-control" name="product_status"/> -->
              <select class="form-control select2" name="committee_id4" style="width: 100%;">
                    <option  value="">Please Select Nominee</option>
                    @foreach($User as $key => $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                  </select>
          </div>

          <div class="form-group">
              <label for="quantity">Nominee 5:</label>
              <!-- <input type="text" class="form-control" name="product_status"/> -->
              <select class="form-control select2" name="committee_id5" style="width: 100%;">
                    <option  value="">Please Select Nominee</option>
                    @foreach($User as $key => $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                  </select>
          </div>

          <div class="form-group">
              <label for="quantity">Nominee 6:</label>
              <!-- <input type="text" class="form-control" name="product_status"/> -->
              <select class="form-control select2" name="committee_id6" style="width: 100%;">
                    <option  value="">Please Select Nominee</option>
                    @foreach($User as $key => $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                  </select>
          </div>


         <div class="form-group">
              <label for="name">Position :</label>
              <input type="text" class="form-control" name="position" id="position">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
    </div>
  </div>
@endsection