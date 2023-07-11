@extends('layouts.admin')
@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Edit</li>
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
                <label for="inputName">Event Title</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Event Description</label>
                <textarea id="inputDescription" class="form-control" rows="4">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</textarea>
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
                <input type="number" id="inputEstimatedBudget" class="form-control" value="2300" step="1">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Total amount spent</label>
                <input type="number" id="inputSpentBudget" class="form-control" value="2000" step="1">
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
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Files</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0 mt-3">
              <table class="table">
                <thead>
                  <tr>
                    <th>File Name</th>
                    <th>File Size</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td>Functional-requirements.docx</td>
                    <td>49.8005 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>UAT.pdf</td>
                    <td>28.4883 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>Email-from-flatbal.mln</td>
                    <td>57.9003 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>Logo.png</td>
                    <td>50.5190 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>Contract-10_12_2014.docx</td>
                    <td>44.9715 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12 mb-2">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
      </div>
    </section>




@endsection