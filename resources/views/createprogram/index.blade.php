@extends('layouts.admin')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Program Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Program Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Program Title</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Program Description</label>
                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label>Date:</label>
                  <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
                      <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                <label>Time:</label>
                  <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
                      <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Location (Please state the venue for the event)</label>
                <input type="text" id="inputClientCompany" class="form-control">
              </div>
              <label class="mt-2">Contact Information:</label>
              <div class="form-group">
                <label for="inputProjectLeader">Name of Organizer representative/in-charge</label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Contact Email</label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Contact Phone Number</label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Office Address</label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div>
              <label class="mt-2">Organizer Information:</label>
              <div class="form-group">
                <label for="inputProjectLeader">Organizer Name</label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Organizer Description</label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Organizer Website (If available only)</label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Organizer Logo, or campaign banner</label>
                <div class="input-group">
                  <div class="custom-file mb-2">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append mb-2">
                    <span class="input-group-text">Upload</span>
                </div> 
              </div>                                
              <div class="form-group">
                <label for="inputStatus">Participants/Attendees</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>Limited</option>
                  <option>Unlimited</option>
                  <option>Selected Participants/Faculty/Attendees</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Food or drinks:</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>Provided</option>
                  <option>Not Provided</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Total pax (Please state the faculty if applicable)</label>
                <input type="text" id="inputClientCompany" class="form-control">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Any supportive documents</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                </div> 
              </div>                                                                                 
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Budget</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Estimated budget</label>
                <input type="number" id="inputEstimatedBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Total amount spent (Please state after program)</label>
                <input type="number" id="inputSpentBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Supportive document/Budget proposal</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col mb-2">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Create new event" class="btn btn-success float-right">
        </div>
      </div>
    </section>

@endsection