@extends('admin.layouts.app')
@section('content')
<div class="pcoded-content">
   <div class="pcoded-inner-content">
      <!-- Main-body start -->
      <div class="main-body">
         <div class="page-wrapper">
            <!-- Page header start -->
            <div class="page-header">
               <div class="page-header-title">
                  <h4>{{__('Basic Module Inputs')}} </h4>
               </div>
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item">                       
                        <i class="icofont icofont-home"></i>                        
                     </li>
                     <li class="breadcrumb-item">{{__('Module')}}  {{__('Components')}}</li>                     
                  </ul>
               </div>
            </div>
            <!-- Page header end -->
            <!-- Page body start -->
            <div class="page-body">
               <div class="row">
                  <div class="col-sm-12">
                     <!-- Basic Form Inputs card start -->
                     <div class="card">
                        <div class="card-block">
                           <h4 class="sub-title">{{__('Module Inputs')}}</h4>
                           {!! Form::open(array('method' => 'post', 'route' => 'admin.modules.store', 'class' => 'form', 'files'=>true)) !!}
                           @include('admin.modules.inc.form')
                           <div class="row">
                              <div class="col-md-5"></div>
                              <div class="col-md-4"><button type="submit" class="btn btn-primary">{{__('Create')}}</button></div>
                           </div>
                           
                        </div>

                     </div>
                  </div>
               </div>
            </div>
            <!-- Page body end -->
         </div>
      </div>
   </div>
</div>
@endsection
