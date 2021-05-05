 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">{{__('Owner')}}: {{$account->owner}}</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> {{__('Generate Report')}}</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                {{__('Projects')}} </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">4</div>
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
                                                {{__('Donaciones')}}</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">  {{number_format($donations->sum('id'))}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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
                                                {{__('Acumulado')}}</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> $ {{number_format($donations->sum('amount'))}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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
                                                {{__('Investment')}} </div>
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


                        <!-- Area Chart -->
                        <div class="col-xl-10 offset-1">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-success">Depositios</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                
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

                        
                        

<div class="row">

                                        <div class="card shadow col-8 mb-2 ">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-danger">Investments</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myBarChart"></canvas>
                                    </div>
                                </div>
                            </div>



                                        <div class="card shadow col-4 mb-2 ">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Information</h6>
                                </div>
                               

 <div class="card-body">
                                    	<ul >
                                            <li ><b>Propietario: </b>{{$account->owner}}</li>
                                            <li ><b>Pais: </b>{{$account->country}}</li>
                                            <li ><b>Banco: </b>{{$account->bank}}</li>
                                            <li ><b>Numero de tarjeta: </b>{{$account->card}}</li>
                                            <li ><b>Numero de cuenta: </b>{{$account->account_number}}</li>
                                            <li ><b>Numero de Ruta: </b>{{$account->route_number}}</li>
                                            <li ><b>Telefono: </b>{{$account->route_number}}</li>
                                            <li ><b>E-mail: </b>{{$account->route_number}}</li>
                                            <li ><small>Apps </small></li>
                                            <ul>
                                                    <li ><b>Zelle: </b>{{$account->zelle ?? 'No zelle'}}</li>
                                                    <li ><b>Quickpay: </b>{{$account->quickpay ?? 'No Quick Pay'}}</li>
                                                    <li ><b>Paypal: </b>{{$account->paypal ?? 'No Paypal'}}</li>

                                        </ul>
                                        
                                                </ul>
                                </div>


                            </div>



</div>




<hr>



   <div class="col-lg-12 ">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Information</h6>
                                </div>
                                <div class="card-body">


     <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>Donador</th>
                                        <th>Cantidad</th>
                                        <th>Proyecto</th>
                                           
                                        </tr>
                                    </thead>
                               
                                    <tbody>
                                    @foreach($donations as $donation)
                                    <tr>
                                            <td>{{$donation->supporter->name}}</td>
                                            <td>{{$donation->amount}}</td>
                                            <td>{{$donation->project->name}}</td>
                                      
</tr>

                                    @endforeach
    

</tbody>
</table>
</div>

</div>
</div>
</div>






                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @section('js')

<script src="/vendor/chartjs/Chart.min.js"></script>

<script src="/js/charts/accounts/chart-area-account.js"></script>
<script src="/js/charts/accounts/chart-pie-account.js"></script>
<script src="/js/charts/accounts/chart-bar-account.js"></script>  

 <script src="/backend/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script src="/backend/js/demo/tableDonations.js"></script>

            @endsection