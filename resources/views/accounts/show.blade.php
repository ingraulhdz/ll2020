@extends('main')


@section('content')


<div class="card shadow mb-4">
    
     <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h6 class="h3 mb-0 font-weight-bold text-primary">{{__('Account')}}</h6>
                              
<a href="{{route('accounts.index')}}" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">{{__('Back')}}</span>
                    </a>
                                                </div>
                        </div>

    <div class="card-body">         





	



		  @include('accounts.dashboard')
</div>
</div>

@endsection