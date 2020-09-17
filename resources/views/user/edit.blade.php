@extends('layouts.admin')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update User</h1>
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
      <form method="post" action="{{ url('/user/update') }}">
         @csrf
         <input type="hidden" name="user_id" value="{{ $User->id }}">
        <div class="form-group">
              <label for="price">Name :</label>
              <input type="text" class="form-control" name="name"  value="{{ $User->name }}"/>
          </div>
         
          <div class="form-group">
              <label for="price">Email :</label>
              <input type="email" class="form-control" name="email"  value="{{ $User->email }}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Password:</label>
              <input type="password" class="form-control" name="password"  value="{{ $User->password }}"disabled/>
          </div>

          <div class="form-group">
              <label for="quantity">Role:</label>
              <!-- <input type="text" class="form-control" name="product_status"/> -->
              <select class="form-control select2" name="role" style="width: 100%;">
                   <?php if ($User->user_type == '1'):?>
                    <option selected="selected" value="1">Admin</option>
                    <option value="2">Committee</option>
                    <option value="3">Member</option>
                     <?php elseif ($User->user_type == '2'):?>
                    <option selected="selected" value="2">Committee</option>
                    <option value="1">Admin</option>
                    <option  value="3">Member</option>
                    <?php elseif ($User->user_type == '3'):?>
                    <option selected="selected" value="3">Member</option>
                    <option value="1">Admin</option>
                    <option  value="2">Committee</option>
                  <?php endif; ?>
                  </select>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
    </div>
  </div>
@endsection