@extends('layouts.admin')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Jobs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
              <li class="breadcrumb-item active">Jobs</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Company
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Yunivent</b></h2>
                      <p class="text-muted text-sm"><b>Job: </b> Graphic Designer</p>
                      <p class="text-muted text-sm"><b>Job type: </b>On-site</p>
                      <p class="text-muted text-sm"><b>Job Contract: </b>Intern</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: 123 Main Street, Anytown, USA</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: +1 (555) 123-4567</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="{{ url('/jobdetail') }}" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Apply now
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Software Developer
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>John Smith</b></h2>
                      <p class="text-muted text-sm"><b>Job: </b> Full Stack Developer / JavaScript Developer / .NET Developer</p>
                      <p class="text-muted text-sm"><b>Job type: </b>Remote</p>
                      <p class="text-muted text-sm"><b>Job Contract: </b>Part time</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: 123 Main Street, Anytown, USA</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: +1 (555) 123-4567</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../dist/img/user2-160x160.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Apply now
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Company
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Yunivent</b></h2>
                      <p class="text-muted text-sm"><b>Job: </b> Graphic Designer</p>
                      <p class="text-muted text-sm"><b>Job type: </b>On-site</p>
                      <p class="text-muted text-sm"><b>Job Contract: </b>Intern</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: 123 Main Street, Anytown, USA</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: +1 (555) 123-4567</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="{{ url('/jobdetail') }}" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Apply now
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Company
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Yunivent</b></h2>
                      <p class="text-muted text-sm"><b>Job: </b> Graphic Designer</p>
                      <p class="text-muted text-sm"><b>Job type: </b>On-site</p>
                      <p class="text-muted text-sm"><b>Job Contract: </b>Intern</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: 123 Main Street, Anytown, USA</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: +1 (555) 123-4567</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="{{ url('/jobdetail') }}" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Apply now
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Company
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Yunivent</b></h2>
                      <p class="text-muted text-sm"><b>Job: </b> Graphic Designer</p>
                      <p class="text-muted text-sm"><b>Job type: </b>On-site</p>
                      <p class="text-muted text-sm"><b>Job Contract: </b>Intern</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: 123 Main Street, Anytown, USA</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: +1 (555) 123-4567</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="{{ url('/jobdetail') }}" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Apply now
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Company
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Yunivent</b></h2>
                      <p class="text-muted text-sm"><b>Job: </b> Graphic Designer</p>
                      <p class="text-muted text-sm"><b>Job type: </b>On-site</p>
                      <p class="text-muted text-sm"><b>Job Contract: </b>Intern</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: 123 Main Street, Anytown, USA</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: +1 (555) 123-4567</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="{{ url('/jobdetail') }}" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Apply now
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Company
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Yunivent</b></h2>
                      <p class="text-muted text-sm"><b>Job: </b> Graphic Designer</p>
                      <p class="text-muted text-sm"><b>Job type: </b>On-site</p>
                      <p class="text-muted text-sm"><b>Job Contract: </b>Intern</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: 123 Main Street, Anytown, USA</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: +1 (555) 123-4567</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="{{ url('/jobdetail') }}" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Apply now
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Company
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Yunivent</b></h2>
                      <p class="text-muted text-sm"><b>Job: </b> Graphic Designer</p>
                      <p class="text-muted text-sm"><b>Job type: </b>On-site</p>
                      <p class="text-muted text-sm"><b>Job Contract: </b>Intern</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: 123 Main Street, Anytown, USA</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: +1 (555) 123-4567</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="{{ url('/jobdetail') }}" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Apply now
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Company
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Yunivent</b></h2>
                      <p class="text-muted text-sm"><b>Job: </b> Graphic Designer</p>
                      <p class="text-muted text-sm"><b>Job type: </b>On-site</p>
                      <p class="text-muted text-sm"><b>Job Contract: </b>Intern</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: 123 Main Street, Anytown, USA</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: +1 (555) 123-4567</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="{{ url('/jobdetail') }}" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Apply now
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item"><a class="page-link" href="#">7</a></li>
              <li class="page-item"><a class="page-link" href="#">8</a></li>
            </ul>
          </nav>
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

@endsection