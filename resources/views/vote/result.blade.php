@extends('layouts.admin')
@section('content')
<!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
         <div class="card ">
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Result</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
               <canvas id="myChart" width="400" height="400"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
      

  </div>
</div>
    </div>
  </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
 <script>
  
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      <?php if($user3 == NULL):?>
        labels: ['{{$user1->name}}', '{{$user2->name}}'],
      <?php elseif($user4 == NULL):?>
         labels: ['{{$user1->name}}', '{{$user2->name}}', '{{$user3->name}}'],
      <?php elseif($user5 == NULL):?>
         labels: ['{{$user1->name}}', '{{$user2->name}}', '{{$user3->name}}', '{{$user4->name}}'],
      <?php elseif($user6 == NULL):?>
         labels: ['{{$user1->name}}', '{{$user2->name}}', '{{$user3->name}}', '{{$user4->name}}', '{{$user5->name}}'],
      <?php else:?>
         labels: ['{{$user1->name}}', '{{$user2->name}}', '{{$user3->name}}', '{{$user4->name}}', '{{$user5->name}}', '{{$user6->name}}'],
      <?php endif;?>
        datasets: [{
            label: 'Number of Votes',
             <?php if($user3 == NULL):?>
            data: ['{{$user1Vote}}', '{{$user2Vote}}'],
            <?php elseif($user4 == NULL):?>
             data: ['{{$user1Vote}}', '{{$user2Vote}}', '{{$user3Vote}}'],
            <?php elseif($user5 == NULL):?>
             data: ['{{$user1Vote}}', '{{$user2Vote}}', '{{$user3Vote}}', '{{$user4Vote}}'],
            <?php elseif($user6 == NULL):?>
             data: ['{{$user1Vote}}', '{{$user2Vote}}','{{$user3Vote}}', '{{$user4Vote}}', '{{$user5Vote}}'],
            <?php else:?>
             data: ['{{$user1Vote}}', '{{$user2Vote}}','{{$user3Vote}}', '{{$user4Vote}}', '{{$user5Vote}}', '{{$user6Vote}}'],
            <?php endif;?>
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
      legend: {
        display: false
    },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
@endsection