@extends('layouts.admin')
@section('header', 'Dashboard')

@section('content')
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
            	<div class="inner">
            		<h1>{{ $total_buku }}</h1>
            		<p>Total Buku</p>
            	</div>
            	<div class="icon">
            		<i class="fa fa-book"></i>
            	</div>
            	<a href="{{ url('buku')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
            		<h1>{{ $total_anggota }}</h1>
            		<p>Total Anggota</p>
            	</div>
            	<div class="icon">
            		<i class="fa fa-book"></i>
            	</div>
            	<a href="{{ url('anggota')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
            		<h1>{{ $total_peminjaman }}</h1>
            		<p>Total Peminjaman</p>
            	</div>
            	<div class="icon">
            		<i class="fa fa-book"></i>
            	</div>
            	<a href="{{ url('peminjaman')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
             <div class="inner">
            		<h1>{{ $total_penerbit }}</h1>
            		<p>Total Penerbit</p>
            	</div>
            	<div class="icon">
            		<i class="fa fa-book"></i>
            	</div>
            	<a href="{{ url('penerbit')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">

<!-- DONUT CHART -->
	<div class="col-lg-6">
		<div class="card card-danger">
              <div class="card-header">
               		 <h3 class="card-title">Grafik Penerbit</h3>

               <div class="card-tools">
	                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
	                    <i class="fas fa-minus"></i>
	                  </button>
	                  <button type="button" class="btn btn-tool" data-card-widget="remove">
	                    <i class="fas fa-times"></i>
	                  </button>
               </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
       </div>
    </div>
 <!-- BAR CHART -->
 	<div class="col-lg-6">
        <div class="card card-success">
              <div class="card-header">
	                <h3 class="card-title">Grafik Peminjaman</h3>

                <div class="card-tools">
	                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
	                    <i class="fas fa-minus"></i>
	                  </button>
	                  <button type="button" class="btn btn-tool" data-card-widget="remove">
	                    <i class="fas fa-times"></i>
	                  </button>
                </div>
              </div>
	              <div class="card-body">
	                <div class="chart">
	                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        		 </div>
    		 </div>
 		</div>
   </div>
  <!-- PIE CHART -->
    <div class="card card-danger">
        <div class="card-header">
                <h3 class="card-title">Grafik Pengarang</h3>

	                <div class="card-tools">
		                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
		                    <i class="fas fa-minus"></i>
		                  </button>
		                  <button type="button" class="btn btn-tool" data-card-widget="remove">
		                    <i class="fas fa-times"></i>
		                  </button>
	                </div>
              </div>
       <div class="card-body">
                <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
       </div>
   </div>
@endsection
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<script type="text/javascript">
	
		var label_donut = '{!! json_encode($label_donut) !!}';
		var data_donut = '{!! json_encode($data_donut) !!}';
		var label_pie = '{!! json_encode($label_pie) !!}';
		var data_pie = '{!! json_encode($data_pie) !!}';
		var data_bar = '{!! json_encode($data_bar) !!}';

	$(function () {

		//--------------
		//-DONUT CHART-
		//--------------
		//Get Content With jQuery - using jQuery's . get() method.
		var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
		var donutData		 = {
			labels: JSON.parse(label_donut),
			datasets: [
				{
					data: JSON.parse(data_donut),
					backgroundColor : ['#f56954', '#00a65a', 'f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
				}
			]
		}
		var donutOptions	= {
			maintainAspectRatio : false,
			responsive : true,
		}
		//Create pie or donut chart
		//You can switch between pie and donut using the method below.
		new Chart(donutChartCanvas, {
			type: 'doughnut',
			data: donutData,
			opton: donutOptions
		})

		//-------------
	    //- PIE CHART -
	    //-------------
	    // Get context with jQuery - using jQuery's .get() method.
	    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
	    var pieData        = {
			labels: JSON.parse(label_pie),
			datasets: [
				{
					data: JSON.parse(data_pie),
					backgroundColor : ['#f56954', '#00a65a', 'f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
				}
			]
		}
	    var pieOptions     = {
	      maintainAspectRatio : false,
	      responsive : true,
	    }
	    //Create pie or douhnut chart
	    // You can switch between pie and douhnut using the method below.
	    new Chart(pieChartCanvas, {
	      type: 'pie',
	      data: pieData,
	      options: pieOptions
	    })

		//-------------
	    //- BAR CHART -
	    //-------------

	    var areaChartData = {
	    	labels : ['January', 'February', 'March', 'May', 'June', 'July', 'Agustus', 'September', 'October', 'November', 'December'],
	    	datasets: JSON.parse(data_bar)
	    }

	    var barChartCanvas = $('#barChart').get(0).getContext('2d')
	    var barChartData = $.extend(true, {}, areaChartData)
	    //var temp0 = areaChartData.datasets[0]
	    //var temp1 = areaChartData.datasets[1]
	    //barChartData.datasets[0] = temp1
	    //barChartData.datasets[1] = temp0

	    var barChartOptions = {
	      responsive              : true,
	      maintainAspectRatio     : false,
	      datasetFill             : false
	    }

	    new Chart(barChartCanvas, {
	      type: 'bar',
	      data: barChartData,
	      options: barChartOptions
	    })
	    //---------------------
	    //- STACKED BAR CHART -
	    //---------------------
	    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
	    var stackedBarChartData = $.extend(true, {}, barChartData)

	    var stackedBarChartOptions = {
	      responsive              : true,
	      maintainAspectRatio     : false,
	      scales: {
	        xAxes: [{
	          stacked: true,
	        }],
	        yAxes: [{
	          stacked: true
	        }]
	      }
	    }

	    new Chart(stackedBarChartCanvas, {
	      type: 'bar',
	      data: stackedBarChartData,
	      options: stackedBarChartOptions
	    })

	    
	})	
</script>