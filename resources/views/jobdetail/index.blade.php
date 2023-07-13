@extends('layouts.admin')
@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Graphic Designer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Graphic Designer</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Salary</span>
                      <span class="info-box-number text-center text-muted mb-0">RM 1000</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Location</span>
                      <span class="info-box-number text-center text-muted mb-0">Remote</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Requirement</span>
                      <span class="info-box-number text-center text-muted mb-0">Bachelor in Multimedia and Related</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Job Type</span>
                      <span class="info-box-number text-center text-muted mb-0">Internship</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Total applicants</span>
                      <span class="info-box-number text-center text-muted mb-0">23</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Company Name</span>
                      <span class="info-box-number text-center text-muted mb-0">Yunivent</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h4>Job Description</h4>
                    <div class="post">
                      <p>
                        Will be creating UI/UX design by working closely with product team
                      </p>
                    </div>

                      <div class="post">
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
                      </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 class="text-primary"></i> Graphic Designer</h3>
              <br>
              <div class="text-muted">
                <p class="text-sm">Organizer Description
                  <b class="d-block">Event Company</b>
                </p>
                <p class="text-sm">Name of Organizer representative/in-charge
                  <b class="d-block">Wan Amirul Aiman</b>
                </p>
                <p class="text-sm">Contact Phone Number
                  <b class="d-block">+601123234545</b>
                </p>
                <p class="text-sm">Contact Email
                  <b class="d-block">hr.yunivent@gmail.com</b>
                </p>
              </div>

              <div class="text-center mt-5 mb-3">
                <a href="#" class="btn btn-sm btn-info">Message</a>
                <a href="{{ url('/jobapply') }}" class="btn btn-sm btn-primary">Apply</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>

    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Graphic Designer</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Estimated budget</span>
                      <span class="info-box-number text-center text-muted mb-0">NA</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Location</span>
                      <span class="info-box-number text-center text-muted mb-0">Dewan Al-Ghazali, Fakulti Sains Komputer Dan Matematik</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Date</span>
                      <span class="info-box-number text-center text-muted mb-0">26/2/2023</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Time</span>
                      <span class="info-box-number text-center text-muted mb-0">10.30 am - 5.30 pm</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Total pax</span>
                      <span class="info-box-number text-center text-muted mb-0">2000</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Organizer Name</span>
                      <span class="info-box-number text-center text-muted mb-0">Computer Science Club</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Participants/Attendees</span>
                      <span class="info-box-number text-center text-muted mb-0">Uitm Students </span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Food and drinks</span>
                      <span class="info-box-number text-center text-muted mb-0">Provided</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h4>Event Description</h4>
                    <div class="post">
                      <p>
                        Computer Science club is hosting an exhilarating musical festival, bringing together talented musicians, vibrant performances, and an electrifying atmosphere for students and music enthusiasts to immerse themselves in a celebration of music and culture.
                      </p>
                    </div>

                      <div class="post">
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
                      </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 class="text-primary"></i> Graphic Designer</h3>
              <br>
              <div class="text-muted">
                <p class="text-sm">Organizer Description
                  <b class="d-block">Computer Science Club</b>
                </p>
                <p class="text-sm">Name of Organizer representative/in-charge
                  <b class="d-block">Kamal Awang</b>
                </p>
                <p class="text-sm">Contact Phone Number
                  <b class="d-block">+601123234545</b>
                </p>
                <p class="text-sm">Contact Email
                  <b class="d-block">kamal@student.com</b>
                </p>
              </div>

              <h5 class="mt-5 text-muted">Project files</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Venuebooking.docx</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> Tentative.pdf</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> approval.docx</a>
                </li>
              </ul>
              <div class="text-center mt-5 mb-3">
                <a href="#" class="btn btn-sm btn-info">Message</a>
                <a href="#" class="btn btn-sm btn-primary">Approve</a>
                <a href="#" class="btn btn-sm btn-danger">Reject</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>

    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Graphic Designer</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Estimated budget</span>
                      <span class="info-box-number text-center text-muted mb-0">NA</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Location</span>
                      <span class="info-box-number text-center text-muted mb-0">Dewan Al-Ghazali, Fakulti Sains Komputer Dan Matematik</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Date</span>
                      <span class="info-box-number text-center text-muted mb-0">22/1/2023 - 24/1/2023</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Time</span>
                      <span class="info-box-number text-center text-muted mb-0">10.30 am - 5.30 pm</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Total pax</span>
                      <span class="info-box-number text-center text-muted mb-0">2000</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Organizer Name</span>
                      <span class="info-box-number text-center text-muted mb-0">Goodvibes</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Participants/Attendees</span>
                      <span class="info-box-number text-center text-muted mb-0">Open to all </span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Food and drinks</span>
                      <span class="info-box-number text-center text-muted mb-0">Provided</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h4>Event Description</h4>
                    <div class="post">
                      <p>
                        Goodvibes is hosting an exhilarating musical festival, bringing together talented musicians, vibrant performances, and an electrifying atmosphere for students and music enthusiasts to immerse themselves in a celebration of music and culture.
                      </p>
                    </div>

                      <div class="post">
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
                      </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 class="text-primary"></i> Graphic Designer</h3>
              <br>
              <div class="text-muted">
                <p class="text-sm">Organizer Description
                  <b class="d-block">Event Company</b>
                </p>
                <p class="text-sm">Name of Organizer representative/in-charge
                  <b class="d-block">Kamal Awang</b>
                </p>
                <p class="text-sm">Contact Phone Number
                  <b class="d-block">+601123234545</b>
                </p>
                <p class="text-sm">Contact Email
                  <b class="d-block">kamal@goodvibes.com</b>
                </p>
              </div>

              <h5 class="mt-5 text-muted">Project files</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Venuebooking.docx</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> Tentative.pdf</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> approval.docx</a>
                </li>
              </ul>
              <div class="text-center mt-5 mb-3">
                <a href="#" class="btn btn-sm btn-danger">Delete</a>                
                <a href="#" class="btn btn-sm btn-primary">Edit Detail</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>


@endsection