@extends('layouts.admin')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="small-box bg-lightblue">
          <div class="inner">
            <h3>44</h3>
            <p>Total University</p>
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
        <div class="small-box bg-lightblue">
          <div class="inner">
            <h3>135,000</h3>
            <p>Total User</p>
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
        <div class="small-box bg-lightblue">
          <div class="inner">
            <h3>RM 288,888</h3>
            <p>Transaction Volume</p>
          </div>
          <div class="icon">
            <i class="fas fa-dollar-sign"></i>  
          </div>
          <a href="#" class="small-box-footer">More info 
            <i class="fas fa-arrow-circle-right"></i>
          </a> 
        </div>
      </div>
      
      <div class="col-lg-3 col-6">
        <div class="small-box bg-lightblue">
          <div class="inner">
            <h3>8,828</h3>
            <p>Total Event</p>
          </div>
          <div class="icon"> 
            <i class="fas fa-calendar"></i> 
          </div>
          <a href="#" class="small-box-footer">More info 
            <i class="fas fa-arrow-circle-right"></i>
          </a> 
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-lightblue elevation-1"><i class="fas fa-server"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Server Status</span>
            <span class="info-box-number">Online</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-lightblue elevation-1"><i class="fas fa-clock"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Uptime</span>
            <span class="info-box-number">99.9%</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-lightblue elevation-1"><i class="fas fa-exclamation-circle"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Error Rate</span>
            <span class="info-box-number">0.5%</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-lightblue elevation-1"><i class="fas fa-chart-line"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Performance</span>
            <span class="info-box-number">High</span>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-12">
        <div class="card">

          <div class="card-header">
            <h5 class="card-title">
              <i class="fa-solid fa-chart-simple"></i>
               User Activities
             </h5>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-wrench"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                  <a href="#" class="dropdown-item">Action</a>
                  <a href="#" class="dropdown-item">Another action</a>
                  <a href="#" class="dropdown-item">Something else here</a>
                  <a class="dropdown-divider"></a>
                  <a href="#" class="dropdown-item">Separated link</a>
                </div>
              </div>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>

          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <p class="text-center">
                  <strong>Transactions: 1 Jan, 2023 - 30 Jul, 2023</strong>
                </p>
                <div class="chart">
                  <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                </div>
              </div>
              <div class="col-md-4">
                <p class="text-center">
                  <strong>User Activity</strong>
                </p>
                <div class="progress-group">
                  Active Users
                  <span class="float-right"><b>100,000</b>/135,000</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-lightblue" style="width: 80%"></div>
                  </div>
                </div>
                <div class="progress-group">
                  New Users
                  <span class="float-right"><b>3100</b>/135,000</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-lightblue" style="width: 75%"></div>
                  </div>
                </div>
                <div class="progress-group">
                  User Growth Rate
                  <span class="float-right"><b>7000</b>/10000</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-lightblue" style="width: 60%"></div>
                  </div>
                </div>
                <div class="progress-group">
                  Visitor
                  <span class="float-right"><b>538,015</b>/1,000,000</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-lightblue" style="width: 50%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card-footer">
            <div class="row">
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                  <h5 class="description-header">$3,335,210.43</h5>
                  <span class="description-text">Transaction Summary: Total transactions</span>
                </div>
              </div>
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                  <h5 class="description-header">$3,335,210.43</h5>
                  <span class="description-text">Successful transactions</span>
                </div>
              </div>
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                  <h5 class="description-header">$24,813.53</h5>
                  <span class="description-text">Failed transactions</span>
                </div>
              </div>
              <div class="col-sm-3 col-6">
                <div class="description-block">
                  <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                  <h5 class="description-header">$2,935,210.43</h5>
                  <span class="description-text">Net Profit</span>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fa-solid fa-gear"></i>
                Audit Logs
              </h3>
              <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Recent Changes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#sales-chart" data-toggle="tab">User Activity</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#revenue-chart" data-toggle="tab">System Logs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#sales-chart" data-toggle="tab">Security Logs</a>
                  </li>
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
              <h3 class="card-title">System Notifications</h3>

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
              <ul class="products-list product-list-in-card pl-2 pr-2">
                <li class="item">
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">System Update
                      <span class="badge badge-warning float-right">1 hour ago</span>
                    </a>
                    <span class="product-description">
                      New system update is available. Please apply the update to ensure optimal performance.
                    </span>
                  </div>
                </li>
                <li class="item">
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Maintenance Schedule
                      <span class="badge badge-info float-right">Tomorrow</span>
                    </a>
                    <span class="product-description">
                      Scheduled maintenance is planned for tomorrow. Expect temporary service interruptions during the maintenance window.
                    </span>
                  </div>
                </li>
                <li class="item">
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">
                      Important Announcement <span class="badge badge-danger float-right">Just now</span>
                    </a>
                    <span class="product-description">
                      An important announcement has been made. Please review the details and take necessary actions.
                    </span>
                  </div>
                </li>
                <li class="item">
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">System Update
                      <span class="badge badge-warning float-right">1 hour ago</span>
                    </a>
                    <span class="product-description">
                      New system update is available. Please apply the update to ensure optimal performance.
                    </span>
                  </div>
                </li>              
              </ul>
            </div>
            <div class="card-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All Notifications</a>
            </div>
          </div>
        </div>


    </div>
  </div>
</section>
@endsection