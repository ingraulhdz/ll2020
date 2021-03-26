@extends('main')
@section('css')
<link href="/backend/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

@endsection

@section('content')
<div id="monitor" width="100%" height="100%">
<div class="card shadow mb-4">
   <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h6 class="h3 mb-0 font-weight-bold text-primary">{{__('Monitor')}}</h6>
                     
<a href="/home" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-times"></i>
                        </span>
                        <span class="text">{{__('Exit')}}</span>
                    </a>
                                                </div>
                        </div>
                        
    <div class="card-body">         
<!-- starts body -->


<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
  


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Proyectos </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$projects->count()}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Miembros </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$members->count()}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                           <!-- Earnings (Monthly) Card Example -->
                           <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Total Donado </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> $ {{number_format($donations->sum('amount'))}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-arrow-up fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Invertido</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> $ {{number_format($investments->sum('amount'))}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-arrow-down fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Donaciones por dia.</h6>
                                    <div class="dropdown no-arrow">
                                    
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="donations-day"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Distribucion de las donaciones</h6>
                                    <div class="dropdown no-arrow">
                                     
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="donations-projects"></canvas>
                                    </div>
                                 
                                </div>
                            </div>
                        </div>
                    </div>


                    
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Expenses by day</h6>
                                </div>
                                <div class="card-body">
                                
                                    <div class="chart-bar">
                                    <canvas id="expenses-day"></canvas>
                                </div>
                                
                                </div>
                            </div>

                            <!-- Color System  <div class="row">
                                <div class="col-lg-6 mb-4"> -->
                            

                        </div>

                        <div class="col-lg-6 mb-4">

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">
                                   Distribucion de las Inversiones
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-bar">
                                    <canvas id="expenses-projects"></canvas>
                                </div>
                               
                            </div>
                        </div>
                    </div>


                        

                     

                        </div>
                    </div>




<!-- ends body -->



    </div>
<div class="card-footer"> 
last 4 min ago        
</div>
</div>
</div>
@endsection

@section('js')

<script>
      $(document).ready(function(){
          var elem = document.getElementById("monitor");
        sendRequest();

$('#accordionSidebar').hide();
$('#top-bar').hide();

       setInterval(sendRequest, 50000); // The interval set to 5 seconds

  


});

function sendRequest(){
    $.ajax({
  url: '/getDataDashboard',
  type: 'GET',
  data:{
    'id': $('#id').val(),
  },
  success: function(data){
console.log(data);

donationsByMonth(data);
topDonors(data);
expensesDistribution(data);




if(data.projectProgress[0]){

$('#p1value').text(data.projectProgress[0].progress);
        $('#p1').addClass('bg-info');
        $('#p1text').text(data.projectProgress[0].name);
       document.getElementById("p1").style.width = "" + data.projectProgress[0].progress + "%";

  }

       if(data.projectProgress[1]){

       $('#p2value').text(data.projectProgress[1].progress);
        $('#p2').addClass('bg-danger');
        $('#p2text').text(data.projectProgress[1].name);
       document.getElementById("p2").style.width = "" + data.projectProgress[1].progress + "%";
  }

if(data.projectProgress[2]){
       $('#p3value').text(data.projectProgress[2].progress);
        $('#p3').addClass('bg-success');
        $('#p3text').text(data.projectProgress[2].name);
       document.getElementById("p3").style.width = "" + data.projectProgress[2].progress + "%";
  }




},error: function(data){
    console.log(data);
  }
    });

    }



</script>
<script>
/* Get the element you want displayed in fullscreen mode (a video in this example): */

</script>

<script src="backend/vendor/chart.js/Chart.min.js"></script>

<script src="/js/charts/monitor/donations-day.js"></script>
<script src="/js/charts/monitor/donations-projects.js"></script>
<script src="/js/charts/monitor/expenses-day.js"></script>  
<script src="/js/charts/monitor/expenses-projects.js"></script>  

@endsection
