@extends('front.main')

@section('content')
<input type="hidden" id="id" value="{{ $project->id }}">
    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h6 class="h3 mb-0 font-weight-bold text-primary">{{$project->name}}</h6>
                              
                        <a href="{{route('projects.investment', $project->id)}}" 
                        class="  btn-sm  shadow-sm btn btn-warning btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-down"></i>
                        </span>
                        <span class="text">{{__('Gastos')}}</span>
                    </a>
  
                              
                               
                    <a href="{{route('projects.donar', $project->id)}}" 
class=" btn-sm  shadow-sm btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-up"></i>
                        </span>
                        <span class="text">{{__('Donaciones')}}</span>
                    </a>


                                                   
<a href="{{route('projects.donar', $project->id)}}" 
class=" btn-sm  shadow-sm btn btn-info btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-download"></i>
                        </span>
                        <span class="text">{{__('Reporte')}}</span>
                    </a>


                            </div>
                        </div>




                                <div class="card-body">
                                                                   <!-- Card Body -->






                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Avance
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$project->advance}}%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar" id="progress"
                                                             aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
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
                                                Donaciones </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ App\Donation::where('project_id', $project->id)->count() }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar fa-2x text-gray-300"></i>
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
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">${{number_format($project->donations->where('project_id',$project->id)->sum('amount'))}}</div>
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
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">${{number_format($project->investments->where('project_id',$project->id)->sum('amount'))}}</div>
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
<!-- 

                    <li> Comite <ul>
<li> Director: {{is_null($project->director) ? 'Sin Asignar': $project->director->fullName() }}</li>
<li> secretary: {{is_null($project->secretary) ? 'Sin Asignar': $project->treasure->fullName() }}</li>
<li> treasure: {{is_null($project->treasure) ? 'Sin Asignar': $project->treasure->fullName() }}</li>
</ul></li>

<li> Cuenta <ul>

@if($project->account)
<li> Nombre de la cuenta: {{$project->account->owner}}</li>
<li> Banco: {{$project->account->bank}}</li>
<li> Numero de Cuenta: {{$project->account->account_number}}</li>
<li> Numero de Ruta: {{$project->account->route_number}}</li>
<li> Numero de Tarjeta: {{$project->account->card}}</li>
</ul></li>
@else
<li>Sin Asignar</li>
@endif -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Donaciones por mes.</h6>
                                    <div class="dropdown no-arrow">
                                        <!-- <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a> -->
                                        <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
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
                                    <h6 class="m-0 font-weight-bold text-primary">Gastos</h6>
                                    <div class="dropdown no-arrow">
                                        <!-- <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <!-- <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>


                    
                    <!-- Content Row -->
                    <div class="row ">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Descripcion del Proyecto</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
  
@if($project->photo)
<img class="img-fluid px-3 px-sm-4 mt-3 mb-4"
 style="width: 25rem;"
src="{{$project->photo}}" alt="">

@else
<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" 
style="width: 25rem;"
src="/backend/img/undraw_posting_photo.svg" 
alt="">

@endif

                                    </div>
                                    <p>{{$project->description}}</p>
                                  
                                </div>
                            </div>

                            <!-- Color System  <div class="row">
                                <div class="col-lg-6 mb-4"> -->
                            

                        </div>

                        <div class="col-lg-6 mb-4">

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">
                                    Mejores Donaciones
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-bar">
                                    <canvas id="myBarChart"></canvas>
                                </div>
                               
                            </div>
                        </div>
                    </div>


                        

                    
    <div class="col-lg-6 mb-4">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                     Donaciones
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Donante</th>
                                <th>Cantidad</th>
                          
                            </tr>
                        </thead>
                   
                        <tbody> 
                            @foreach($project->donations as $item)
                                        <!-- <a href="{{ route('investments.show', $item->id)}}" > -->
                                                 <tr >
                                            
                                        <td><a href="{{ route('donations.show', $item->id)}}" > {{ $item->sponsor}}</a></td>
                                        <td>$ {{number_format($item->amount)}} MXN</td>

                                        </tr>
                                        @endforeach
                          
                        </tbody>
                    </table>
                </div>
               
            </div>
        </div>
    </div>




    
    <div class="col-lg-6 mb-4">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                     Gastos
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="expenses" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Gasto</th>
                                <th>Categoria</th>
                                <th>Precio</th>
                          
                            </tr>
                        </thead>
                   
                        <tbody>
                                    @foreach($project->investments as $item)
                                        <tr>
                                            
                                        <td><a href="{{ route('investments.show', $item->id)}}" >
                                        {{$item->name}}</a></td>
                                        <td>{{$item->category->name}} </td>
                                        <td>{{number_format($item->amount)}} MXN</td>

                                        </tr>
                                        @endforeach
                          
                        </tbody>
                    </table>
                </div>
               
            </div>

                     

                        </div>
                    </div>


    </div>




                </div>






                                </div>
                            </div>


                       

@endsection


@section('js')

<script src="/backend/vendor/chart.js/Chart.min.js"></script>


<script src="/backend/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/backend/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="/backend/js/demo/table-donations-by-project.js"></script>
    <script src="/backend/js/demo/table-expenses-by-project.js"></script>

    <script>
      $(document).ready(function(){

$.ajax({
  url: '/getDataDashboardById',
  type: 'GET',
  data:{
    'id': $('#id').val(),
  },  success: function(data){
    console.log(data);
    console.log(data);
    document.getElementById("progress").style.width = "" + data.project.advance + "%";

donationsByProject(data);
topDonors(data);
expensesDistribution(data);
// top6(data);
 }
  });

});

</script>
<script src="/backend/js/demo/donationsByProject.js"></script>
<script src="/backend/js/demo/topDonationsByProject.js"></script>
<script src="/backend/js/demo/expensesDistributionByProject.js"></script>  


@endsection