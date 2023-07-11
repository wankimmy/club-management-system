@extends('layouts.admin')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
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
                       src="../dist/img/user4-128x128.jpg"
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

                <a href="#" class="btn bg-lightblue btn-block"><b>Follow</b></a>
                <a href="#" class="btn bg-lightblue btn-block"><b>Message</b></a>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-lightblue">
              <div class="card-header">
                <h3 class="card-title">About</h3>
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
                            <li class="nav-item"> <a class="nav-link" href="#sales-chart" data-toggle="tab">Activities</a> </li>
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
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Followed by</h3>

                        <div class="card-tools">
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
                            <img src="../dist/img/user3-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Alexander Pierce</a>
                          </li>
                          <li>
                            <img src="../dist/img/user8-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Norman</a>
                          </li>
                          <li>
                            <img src="../dist/img/user7-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Jane</a>
                          </li>
                          <li>
                            <img src="../dist/img/user6-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">John</a>

                          </li>
                          <li>
                            <img src="../dist/img/user3-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Alexander</a>
                          </li>
                          <li>
                            <img src="../dist/img/user5-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Sarah</a>
                          </li>
                          <li>
                            <img src="../dist/img/user4-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Nora</a>
                          </li>
                          <li>
                            <img src="../dist/img/user3-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Nadia</a>
                          </li>
                        </ul>
                      </div>
                      <div class="card-footer text-center">
                        <a href="javascript:">View All Users</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <!-- Box Comment -->
                    <div class="card card-widget">
                      <div class="card-header">
                        <div class="user-block">
                          <img class="img-circle" src="../dist/img/user4-128x128.jpg" alt="User Image">
                          <span class="username"><a href="#">Nina Abu Seman</a></span>
                          <span class="description">Shared publicly - 7:30 PM Today</span>
                        </div>
                        <!-- /.user-block -->
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" title="Mark as read">
                            <i class="far fa-circle"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <!-- post text -->
                        <p>Far far away, behind the word mountains, far from the
                          countries Vokalia and Consonantia, there live the blind
                          texts. Separated they live in Bookmarksgrove right at</p>

                        <p>the coast of the Semantics, a large language ocean.
                          A small river named Duden flows by their place and supplies
                          it with the necessary regelialia. It is a paradisematic
                          country, in which roasted parts of sentences fly into
                          your mouth.</p>

                        <!-- Attachment -->
                        <div class="attachment-block clearfix">
                          <img class="attachment-img" src="../dist/img/photo1.png" alt="Attachment Image">

                          <div class="attachment-pushed">
                            <h4 class="attachment-heading"><a href="https://www.lipsum.com/">Lorem ipsum text generator</a></h4>

                            <div class="attachment-text">
                              Description about the attachment can be placed here.
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                            </div>
                            <!-- /.attachment-text -->
                          </div>
                          <!-- /.attachment-pushed -->
                        </div>
                        <!-- /.attachment-block -->

                        <!-- Social sharing buttons -->
                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
                        <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                        <span class="float-right text-muted">45 likes - 2 comments</span>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer card-comments">
                        <div class="card-comment">
                          <!-- User image -->
                          <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

                          <div class="comment-text">
                            <span class="username">
                              Maria Gonzales
                              <span class="text-muted float-right">8:03 PM Today</span>
                            </span><!-- /.username -->
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                          </div>
                          <!-- /.comment-text -->
                        </div>
                        <!-- /.card-comment -->
                        <div class="card-comment">
                          <!-- User image -->
                          <img class="img-circle img-sm" src="../dist/img/user5-128x128.jpg" alt="User Image">

                          <div class="comment-text">
                            <span class="username">
                              Nora Havisham
                              <span class="text-muted float-right">8:03 PM Today</span>
                            </span><!-- /.username -->
                            The point of using Lorem Ipsum is that it hrs a morer-less
                            normal distribution of letters, as opposed to using
                            'Content here, content here', making it look like readable English.
                          </div>
                          <!-- /.comment-text -->
                        </div>
                        <!-- /.card-comment -->
                      </div>
                      <!-- /.card-footer -->
                      <div class="card-footer">
                        <form action="#" method="post">
                          <img class="img-fluid img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text">
                          <!-- .img-push is used to add margin to elements next to floating images -->
                          <div class="img-push">
                            <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
                          </div>
                        </form>
                      </div>
                      <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                  </div> 
                  <div class="col-md-12">
                    <!-- Box Comment -->
                    <div class="card card-widget">
                      <div class="card-header">
                        <div class="user-block">
                          <img class="img-circle" src="../dist/img/user4-128x128.jpg" alt="User Image">
                          <span class="username"><a href="#">Nina Abu Seman</a></span>
                          <span class="description">Shared publicly - 7:30 PM Today</span>
                        </div>
                        <!-- /.user-block -->
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" title="Mark as read">
                            <i class="far fa-circle"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <!-- post text -->
                        <p>Far far away, behind the word mountains, far from the
                          countries Vokalia and Consonantia, there live the blind
                          texts. Separated they live in Bookmarksgrove right at</p>

                        <p>the coast of the Semantics, a large language ocean.
                          A small river named Duden flows by their place and supplies
                          it with the necessary regelialia. It is a paradisematic
                          country, in which roasted parts of sentences fly into
                          your mouth.</p>

                        <!-- Attachment -->
                        <div class="attachment-block clearfix">
                          <img class="attachment-img" src="../dist/img/photo1.png" alt="Attachment Image">

                          <div class="attachment-pushed">
                            <h4 class="attachment-heading"><a href="https://www.lipsum.com/">Lorem ipsum text generator</a></h4>

                            <div class="attachment-text">
                              Description about the attachment can be placed here.
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                            </div>
                            <!-- /.attachment-text -->
                          </div>
                          <!-- /.attachment-pushed -->
                        </div>
                        <!-- /.attachment-block -->

                        <!-- Social sharing buttons -->
                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
                        <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                        <span class="float-right text-muted">45 likes - 2 comments</span>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer card-comments">
                        <div class="card-comment">
                          <!-- User image -->
                          <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

                          <div class="comment-text">
                            <span class="username">
                              Maria Gonzales
                              <span class="text-muted float-right">8:03 PM Today</span>
                            </span><!-- /.username -->
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                          </div>
                          <!-- /.comment-text -->
                        </div>
                        <!-- /.card-comment -->
                        <div class="card-comment">
                          <!-- User image -->
                          <img class="img-circle img-sm" src="../dist/img/user5-128x128.jpg" alt="User Image">

                          <div class="comment-text">
                            <span class="username">
                              Nora Havisham
                              <span class="text-muted float-right">8:03 PM Today</span>
                            </span><!-- /.username -->
                            The point of using Lorem Ipsum is that it hrs a morer-less
                            normal distribution of letters, as opposed to using
                            'Content here, content here', making it look like readable English.
                          </div>
                          <!-- /.comment-text -->
                        </div>
                        <!-- /.card-comment -->
                      </div>
                      <!-- /.card-footer -->
                      <div class="card-footer">
                        <form action="#" method="post">
                          <img class="img-fluid img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text">
                          <!-- .img-push is used to add margin to elements next to floating images -->
                          <div class="img-push">
                            <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
                          </div>
                        </form>
                      </div>
                      <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                  </div> 
                </div>  

              </div>

          </div>

        </div>

      </div>
    </section>
@endsection