@extends('layouts.admin')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
          <div class="inner">
            <h3>44</h3>
            <p>Total Club</p>
          </div>
          <div class="icon"> 
            <i class="fas fa-school"></i> 
          </div> 
          <a href="#" class="small-box-footer">More info 
            <i class="fas fa-arrow-circle-right"></i>
          </a> 
          </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>100</sup></h3>
            <p>Total Event Creator</p>
          </div>
            <div class="icon"> 
              <i class="fas fa-users"></i> 
            </div> 
            <a href="#" class="small-box-footer">More info 
              <i class="fas fa-arrow-circle-right"></i>
            </a> 
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>RM 288,888</h3>
            <p>Transaction Volume</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-dollar-sign"></i>  
          </div> <a href="#" class="small-box-footer">More info 
            <i class="fas fa-arrow-circle-right"></i>
          </a> 
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>8,828</h3>
            <p>Total Event</p>
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
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-pie mr-1"></i>
              Sales
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item"> <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Total Club</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#sales-chart" data-toggle="tab">Total Event Creator</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#revenue-chart" data-toggle="tab">Transaction Volume</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#sales-chart" data-toggle="tab">Users</a> </li>
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


      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title mb-3">
              Approval Application Events
            </h3>
            <br>
            <div class="info-box mb-3 bg-success"> 
              <span class="info-box-icon">
                <i class="fa-solid fa-check"></i>
              </span>
              <div class="info-box-content"> 
                <span class="info-box-text">Approved</span> 
                <span class="info-box-number">50</span> 
              </div>
            </div>
            <div class="info-box mb-3 bg-warning"> 
              <span class="info-box-icon">
                <i class="fa-solid fa-hourglass-start"></i>
              </span>
              <div class="info-box-content"> 
                <span class="info-box-text">Pending</span> 
                <span class="info-box-number">46</span> 
              </div>
            </div>
            <div class="info-box mb-3 bg-danger"> 
              <span class="info-box-icon">
                <i class="fa-solid fa-circle-xmark"></i>
              </span>
              <div class="info-box-content"> 
                <span class="info-box-text">Rejected</span> 
                <span class="info-box-number">23</span> 
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>
@endsection