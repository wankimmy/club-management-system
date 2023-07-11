@extends('layouts.admin')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tinymce@5.7.1/skins/ui/oxide/skin.min.css">
<style>
    .tox-notifications-container {
        display: none;
    }
</style>

          <div class="col">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Feed</a></li>
                  <li class="nav-item"><a class="nav-link" href="#message" data-toggle="tab">Messages</a></li>
                  <li class="nav-item"><a class="nav-link" href="#notifications" data-toggle="tab">Notifications</a></li>
                </ul>
              </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                      <!-- Post -->
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
                      <div class="post">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="../dist/img/user1-128x128.jpg" alt="user image">
                          <span class="username">
                            <a href="#">Jonathan Burke Jr.</a>
                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                          </span>
                          <span class="description">Shared publicly - 7:30 PM today</span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                          Welcome to YuniVent.
                        </p>

                        <p>
                          <a href="#" class="link-black text-sm mr-2"><i class="fas fa-retweet mr-1"></i> Repost</a>
                          <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                          <a href="#" class="link-black text-sm"><i class="far fa-heart mr-1"></i> Like</a>
                          <span class="float-right">
                            <a href="#" class="link-black text-sm">
                              <i class="far fa-comments mr-1"></i> Comments (5)
                            </a>
                          </span>
                        </p>

                        <form class="form-horizontal">
                          <div class="input-group input-group-sm mb-0">
                            <input class="form-control form-control-sm" placeholder="Type a comment">
                            <div class="input-group-append">
                              <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.post -->

                      <!-- Post -->
                      <div class="post">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="../dist/img/user3-128x128.jpg" alt="user image">
                          <span class="username">
                            <a href="#">Sarah</a>
                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                          </span>
                          <span class="description">Shared publicly - 7:30 PM today</span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                          Welcome to YuniVent.
                        </p>

                        <p>
                          <a href="#" class="link-black text-sm mr-2"><i class="fas fa-retweet mr-1"></i> Repost</a>
                          <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                          <a href="#" class="link-black text-sm"><i class="far fa-heart mr-1"></i> Like</a>
                          <span class="float-right">
                            <a href="#" class="link-black text-sm">
                              <i class="far fa-comments mr-1"></i> Comments (5)
                            </a>
                          </span>
                        </p>

                        <form class="form-horizontal">
                          <div class="input-group input-group-sm mb-0">
                            <input class="form-control form-control-sm" placeholder="Type a comment">
                            <div class="input-group-append">
                              <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.post -->

                      <!-- Post -->
                      <div class="post">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="../dist/img/user6-128x128.jpg" alt="User Image">
                          <span class="username">
                            <a href="#">Adam Jones</a>
                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                          </span>
                          <span class="description">Posted 5 photos - 5 days ago</span>
                        </div>
                        <!-- /.user-block -->
                        <div class="row mb-3">
                          <div class="col-sm-6">
                            <img class="img-fluid" src="../dist/img/photo1.png" alt="Photo">
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-6">
                            <div class="row">
                              <div class="col-sm-6">
                                <img class="img-fluid mb-3" src="../dist/img/photo2.png" alt="Photo">
                                <img class="img-fluid" src="../dist/img/photo3.jpg" alt="Photo">
                              </div>
                              <!-- /.col -->
                              <div class="col-sm-6">
                                <img class="img-fluid mb-3" src="../dist/img/photo4.jpg" alt="Photo">
                                <img class="img-fluid" src="../dist/img/photo1.png" alt="Photo">
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <p>
                          <a href="#" class="link-black text-sm mr-2"><i class="fas fa-retweet mr-1"></i> Repost</a>
                          <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                          <a href="#" class="link-black text-sm"><i class="far fa-heart mr-1"></i> Like</a>
                          <span class="float-right">
                            <a href="#" class="link-black text-sm">
                              <i class="far fa-comments mr-1"></i> Comments (5)
                            </a>
                          </span>
                        </p>

                        <form class="form-horizontal">
                          <div class="input-group input-group-sm mb-0">
                            <input class="form-control form-control-sm" placeholder="Type a comment">
                            <div class="input-group-append">
                              <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.post -->
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="notifications">
                      <!-- The timeline -->
                      <div class="timeline timeline-inverse">
                        <!-- timeline time label -->
                        <div class="time-label">
                          <span class="bg-white">
                            10 Feb. 2014
                          </span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                          <i class="fas fa-envelope bg-primary"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 12:05</span>

                            <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                            <div class="timeline-body">
                              Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                              weebly ning heekya handango imeem plugg dopplr jibjab, movity
                              jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                              quora plaxo ideeli hulu weebly balihoo...
                            </div>
                            <div class="timeline-footer">
                              <a href="#" class="btn btn-primary btn-sm">Read more</a>
                              <a href="#" class="btn btn-primary btn-sm">Delete</a>
                            </div>
                          </div>
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <div>
                          <i class="fas fa-user bg-primary"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                            <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                            </h3>
                          </div>
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <div>
                          <i class="fas fa-comments bg-primary"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                            <div class="timeline-body">
                              Take me to your leader!
                              Switzerland is small and neutral!
                              We are more like Germany, ambitious and misunderstood!
                            </div>
                            <div class="timeline-footer">
                              <a href="#" class="btn btn-primary btn-flat btn-sm">View comment</a>
                            </div>
                          </div>
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline time label -->
                        <div class="time-label">
                          <span class="bg-primary">
                            3 Jan. 2014
                          </span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                          <i class="fas fa-camera bg-primary"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                            <div class="timeline-body">
                              <img src="https://placehold.it/150x100" alt="...">
                              <img src="https://placehold.it/150x100" alt="...">
                              <img src="https://placehold.it/150x100" alt="...">
                              <img src="https://placehold.it/150x100" alt="...">
                            </div>
                          </div>
                        </div>
                        <!-- END timeline item -->
                        <div>
                          <i class="far fa-clock bg-primary"></i>
                        </div>
                      </div>
                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="message">
                      <div class="col">
                        <div class="card card-primary card-outline direct-chat direct-chat-primary">
                          <div class="card-header">
                            <h3 class="card-title">
                              <div class="direct-chat-infos clearfix">
                                <img class="direct-chat-img" src="../dist/img/user6-128x128.jpg" alt="Message User Image">
                                <span class="direct-chat-name float-left p-3">Anwar Ibrahim</span>
                              </div>                              
                            </h3>

                            <div class="card-tools">
                              <span title="3 New Messages" class="badge bg-primary">3</span>
                              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-plus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                              </button>
                            </div>
                          </div>

                          <div class="card-body" style="display: none;">
                            <div class="direct-chat-messages">
                              <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                  <span class="direct-chat-name float-left">Alexander Pierce</span>
                                  <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                </div>
                                <img class="direct-chat-img" src="../dist/img/user6-128x128.jpg" alt="Message User Image">
                                <div class="direct-chat-text">
                                  You dah register belum event next week?
                                </div>
                              </div>
                              <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                  <span class="direct-chat-name float-right">Sarah Bullock</span>
                                  <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                </div>
                                <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="Message User Image">
                                <div class="direct-chat-text">
                                  Belum you, esok la i register
                                </div>
                              </div>
                              <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                  <span class="direct-chat-name float-left">Alexander Pierce</span>
                                  <span class="direct-chat-timestamp float-right">23 Jan 3:00 pm</span>
                                </div>
                                <img class="direct-chat-img" src="../dist/img/user6-128x128.jpg" alt="Message User Image">
                                <div class="direct-chat-text">
                                  Kaput la you
                                </div>
                                <div class="direct-chat-text">
                                  Tak lurve
                                </div>
                                <div class="direct-chat-text">
                                  Tak cumils
                                </div>
                              </div>                              
                            </div>
                          </div>
                          <div class="card-footer" style="display: none;">
                            <form action="#" method="post">
                              <div class="input-group">
                                <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                <span class="input-group-append">
                                  <button type="submit" class="btn btn-primary">Send</button>
                                </span>
                              </div>
                            </form>
                          </div>
                        </div>

                        <div class="card card-primary card-outline direct-chat direct-chat-primary">
                          <div class="card-header">
                            <h3 class="card-title">
                              <div class="direct-chat-infos clearfix">
                                <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="Message User Image">
                                <span class="direct-chat-name float-left p-3">Alexander Pierce</span>
                              </div>                              
                            </h3>

                            <div class="card-tools">
                              <span title="3 New Messages" class="badge bg-primary">3</span>
                              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-plus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                              </button>
                            </div>
                          </div>

                          <div class="card-body" style="display: none;">
                            <div class="direct-chat-messages">
                              <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                  <span class="direct-chat-name float-left">Alexander Pierce</span>
                                  <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                </div>
                                <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="Message User Image">
                                <div class="direct-chat-text">
                                  You dah register belum event next week?
                                </div>
                              </div>
                              <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                  <span class="direct-chat-name float-right">Sarah Bullock</span>
                                  <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                </div>
                                <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="Message User Image">
                                <div class="direct-chat-text">
                                  Belum you, esok la i register
                                </div>
                              </div>
                              <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                  <span class="direct-chat-name float-left">Alexander Pierce</span>
                                  <span class="direct-chat-timestamp float-right">23 Jan 3:00 pm</span>
                                </div>
                                <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="Message User Image">
                                <div class="direct-chat-text">
                                  Kaput la you
                                </div>
                                <div class="direct-chat-text">
                                  Tak lurve
                                </div>
                                <div class="direct-chat-text">
                                  Tak cumils
                                </div>
                              </div>                              
                            </div>
                          </div>
                          <div class="card-footer" style="display: none;">
                            <form action="#" method="post">
                              <div class="input-group">
                                <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                <span class="input-group-append">
                                  <button type="submit" class="btn btn-primary">Send</button>
                                </span>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>

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