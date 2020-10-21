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
      <form enctype="multipart/form-data" method="post" action="{{ url('/user/update') }}">
         @csrf
         <input type="hidden" name="user_id" value="{{ $User->id }}">

         

 <div class="form-group">
              <label for="profile_photo_path">Profile :</label><br>
             <img src="{{URL::asset('/uploads/'.'/'.$User->profile_photo_path)}}" style="width: 30%;">
              <!-- <input type="file" class="form-control" name="profile_photo_path" id="profile_photo_path" disabled> -->
          </div>
         

        <div class="form-group">
              <label for="price">Name :</label>
              <input type="text" class="form-control" name="name"  value="{{ $User->name }}" disabled/>
          </div>

           <div class="form-group">
              <label for="price">Student ID :</label>
              <input type="text" class="form-control" name="student_id" value="{{ $User->student_id }}" disabled/>
          </div>

          <div class="form-group">
              <label for="quantity">Semester:</label>
              <select class="form-control select2" name="semester" style="width: 100%;" disabled>

                <?php if ($User->semester == ''):?>
                  <option value="">Please Select Semester</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <?php endif; ?>

                    <?php if ($User->semester == '1'):?>
                      <option selected="selected" value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <?php endif; ?>

                    <?php if ($User->semester == '2'):?>
                      <option value="1">1</option>
                    <option selected="selected" value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <?php endif; ?>

                    <?php if ($User->semester == '3'):?>
                      <option value="1">1</option>
                    <option value="2">2</option>
                    <option selected="selected" value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <?php endif; ?>

                    <?php if ($User->semester == '4'):?>
                      <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option selected="selected" value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <?php endif; ?>

                    <?php if ($User->semester == '5'):?>
                      <option  value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option selected="selected" value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <?php endif; ?>

                    <?php if ($User->semester == '6'):?>
                      <option  value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option selected="selected" value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <?php endif; ?>

                    <?php if ($User->semester == '7'):?>
                      <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option selected="selected" value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <?php endif; ?>

                    <?php if ($User->semester == '8'):?>
                      <option  value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option selected="selected" value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <?php endif; ?>

                    <?php if ($User->semester == '9'):?>
                      <option  value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option selected="selected" value="9">9</option>
                    <option value="10">10</option>
                    <?php endif; ?>

                    <?php if ($User->semester == '10'):?>
                      <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option selected="selected" value="10">10</option>
                    <?php endif; ?>
                    
                  </select>
          </div>

          <div class="form-group">
              <label for="quantity">Course:</label>
              <select class="form-control select2" name="course" style="width: 100%;" disabled>
                <?php if ($User->course == 'BSE'):?>
                  <option selected="selected" value="BSE">Bachelor in Software Engineering</option>
                  <?php else:?>
                    <option value="">Please Select Course</option>
                    <option value="BSE">Bachelor in Software Engineering</option>
                <?php endif; ?>
                  </select>
          </div>
         
          <div class="form-group">
              <label for="price">Email :</label>
              <input type="email" class="form-control" name="email"  value="{{ $User->email }}" disabled/>
          </div>
          <div class="form-group">
              <label for="quantity">Password:</label>
              <input type="password" class="form-control" name="password"  value="{{ $User->password }}"disabled/>
          </div>

          <div class="form-group">
              <label for="quantity">Role:</label>
              <!-- <input type="text" class="form-control" name="product_status"/> -->
              <select class="form-control select2" name="role" disabled style="width: 100%;">
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

          <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
      </form>
  </div>
</div>
    </div>
  </div>
@endsection