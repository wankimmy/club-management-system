@extends('layouts.admin')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tinymce@5.7.1/skins/ui/oxide/skin.min.css">
<style>
    .tox-notifications-container {
        display: none;
    }
</style>

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
                       src="../dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Yunivent</h3>

                <p class="text-muted text-center">Organization</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Jobs Offered</b> <a class="float-right">27</a>
                  </li>
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">10,287</a>
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
              <h3 class="card-title">About</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-building mr-1"></i> Organization Type</strong>
              <p class="text-muted">Corporate</p>
              
              <hr>
              
              <strong><i class="fas fa-info-circle mr-1"></i> Organization Description</strong>
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod erat vel ante tristique, nec semper risus posuere. Vestibulum vitae tellus eu metus elementum interdum.</p>
              
              <hr>
              
              <strong><i class="fas fa-envelope mr-1"></i> Email</strong>
              <p class="text-muted">hq.yunivent@gmail.com</p>
              
              <hr>
              
              <strong><i class="fas fa-phone mr-1"></i> Phone</strong>
              <p class="text-muted">+03 456-7890</p>
              
              <hr>
              
              <strong><i class="fas fa-map-marker-alt mr-1"></i> Office Address</strong>
              <p class="text-muted">123 Main Street, City, State, ZIP Code</p>
              
              <hr>

              <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
              <p class="text-muted">Petaling Jaya, Selangor</p>

              <hr>

              <strong><i class="far fa-file-alt mr-1"></i> Bio</strong>
              <p class="text-muted">Explore . Collaborate. Achieve</p>
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
                        <p>Active Events</p>
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
                        <p>Programs</p>
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
                        <p>Events</p>
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
                            <li class="nav-item"> <a class="nav-link" href="#sales-chart" data-toggle="tab">Programs</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#revenue-chart" data-toggle="tab">Announcement</a> </li>
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
                  <div class="col-md-12">
                    <div class="card card-outline card-info">
                      <div class="card-header">
                        <h3 class="card-title">
                          Post something
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                          <textarea id="editor"></textarea>
                      </div>
                    </div>
                  </div>
                  <!-- /.col-->
                </div>

                <div class="row">
                  <div class="col-md-12">
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
                            <img src="../dist/img/user1-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Alexander Pierce</a>
                            <span class="users-list-date">Today</span>
                          </li>
                          <li>
                            <img src="../dist/img/user8-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Norman</a>
                            <span class="users-list-date">Yesterday</span>
                          </li>
                          <li>
                            <img src="../dist/img/user7-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Jane</a>
                            <span class="users-list-date">12 Jan</span>
                          </li>
                          <li>
                            <img src="../dist/img/user6-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">John</a>
                            <span class="users-list-date">12 Jan</span>
                          </li>
                          <li>
                            <img src="../dist/img/user3-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Alexander</a>
                            <span class="users-list-date">13 Jan</span>
                          </li>
                          <li>
                            <img src="../dist/img/user5-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Sarah</a>
                            <span class="users-list-date">14 Jan</span>
                          </li>
                          <li>
                            <img src="../dist/img/user4-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Nora</a>
                            <span class="users-list-date">15 Jan</span>
                          </li>
                          <li>
                            <img src="../dist/img/user3-128x128.jpg" alt="User Image">
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
                  <div class="col-md-12">
                    <h2><b>Feed</b></h2>
                  </div>
                  <div class="col-md-12">
                    <!-- Box Comment -->
                    <div class="card card-widget">
                      <div class="card-header">
                        <div class="user-block">
                          <img class="img-circle" src="../dist/img/user4-128x128.jpg" alt="User Image">
                          <span class="username"><a href="#">Yunivent</a></span>
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
                          <span class="username"><a href="#">Yunivent</a></span>
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

<script src="https://cdn.jsdelivr.net/npm/tinymce@5.7.1/tinymce.min.js"></script>

<script>
    // Initialize TinyMCE editor
    tinymce.init({
        selector: '#editor',
        height: 300,
        plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar_mode: 'floating',
        toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        skin: 'oxide-dark',
        content_css: 'https://cdn.jsdelivr.net/npm/tinymce@5.7.1/skins/content/default/content.min.css'
    });
</script>
@endsection