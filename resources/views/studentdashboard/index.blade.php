@extends('layouts.admin')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><b>Welcome Back!</b></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-lightblue card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Nina Abu Seman</h3>

                <p class="text-muted text-center">UiTM</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Year</b> <a class="float-right">2</a>
                  </li>
                  <li class="list-group-item">
                    <b>Rank</b> <a class="float-right">27</a>
                  </li>
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,287</a>
                  </li>
                </ul>

                <a href="#" class="btn bg-lightblue btn-block"><b>Edit</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-lightblue">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from Universiti Teknologi MARA
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Shah Alam, Selangor</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Bio</strong>

                <p class="text-muted">Lurve to learn</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-4 col-8">
                    <div class="small-box bg-info">
                      <div class="inner">
                        <h3>3</h3>
                        <p>Club Joined</p>
                      </div>
                      <div class="icon"> 
                        <i class="fa-solid fa-sitemap"></i> 
                      </div> 
                      <a href="#" class="small-box-footer">More info 
                        <i class="fas fa-arrow-circle-right"></i>
                      </a> 
                      </div>
                  </div>

                  <div class="col-lg-4 col-8">
                    <div class="small-box bg-success">
                      <div class="inner">
                        <h3>10</sup></h3>
                        <p>Activities Joined</p>
                      </div>
                        <div class="icon"> 
                          <i class="fa-solid fa-dumbbell"></i> 
                        </div> 
                        <a href="#" class="small-box-footer">More info 
                          <i class="fas fa-arrow-circle-right"></i>
                        </a> 
                    </div>
                  </div>

                  <div class="col-lg-4 col-8">
                    <div class="small-box bg-warning">
                      <div class="inner">
                        <h3>3</h3>
                        <p>Event Participation</p>
                      </div>
                      <div class="icon">
                        <i class="fa-solid fa-calendar"></i>  
                      </div> <a href="#" class="small-box-footer">More info 
                        <i class="fas fa-arrow-circle-right"></i>
                      </a> 
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title mr-2">
                          <i class="fa-sharp fa-solid fa-circle-info mr-1"></i>
                          Information Board
                        </h3>
                        <div class="card-tools">
                          <ul class="nav nav-pills ml-auto">
                            <li class="nav-item"> <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Events</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#sales-chart" data-toggle="tab">Club Activities</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#revenue-chart" data-toggle="tab">Club Announcement</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#sales-chart" data-toggle="tab">System Updates</a> </li>
                          </ul>
                        </div>
                      </div>

                      <div class="card-body">
                        <div class="tab-content p-0">
                          <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                            <canvas id="revenue-chart-canvas" height="400" style="height: 300px;"></canvas>
                          </div>
                          <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                            <canvas id="sales-chart-canvas" height="400" style="height: 300px;"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Latest Connections</h3>

                        <div class="card-tools">
                          <span class="badge badge-info">8 New followers</span>
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                      </div>
                      <div class="card-body p-0">
                        <ul class="users-list clearfix">
                          <li>
                            <img src="dist/img/user1-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Alexander Pierce</a>
                            <span class="users-list-date">Today</span>
                          </li>
                          <li>
                            <img src="dist/img/user8-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Norman</a>
                            <span class="users-list-date">Yesterday</span>
                          </li>
                          <li>
                            <img src="dist/img/user7-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Jane</a>
                            <span class="users-list-date">12 Jan</span>
                          </li>
                          <li>
                            <img src="dist/img/user6-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">John</a>
                            <span class="users-list-date">12 Jan</span>
                          </li>
                          <li>
                            <img src="dist/img/user2-160x160.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Alexander</a>
                            <span class="users-list-date">13 Jan</span>
                          </li>
                          <li>
                            <img src="dist/img/user5-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Sarah</a>
                            <span class="users-list-date">14 Jan</span>
                          </li>
                          <li>
                            <img src="dist/img/user4-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Nora</a>
                            <span class="users-list-date">15 Jan</span>
                          </li>
                          <li>
                            <img src="dist/img/user3-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Nadia</a>
                            <span class="users-list-date">15 Jan</span>
                          </li>
                        </ul>
                      </div>
                      <div class="card-footer text-center">
                        <a href="javascript:">View All Users</a>
                      </div>
                    </div>
                  </div>
                </div>  

              </div>

          </div>

        </div>

      </div>
    </section>
@endsection