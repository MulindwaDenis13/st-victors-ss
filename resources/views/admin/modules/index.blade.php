@extends('admin.layouts.app')

@section('content')
<div class="pcoded-content">
   <div class="pcoded-inner-content">
      <!-- Main-body start -->
      <div class="main-body">
         <div class="page-wrapper">
            <!-- Page header start -->
            <div class="page-header">
              @if(session()->has('message.added'))
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>{{__('Task Done')}}!</strong> {!! session('message.content') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
               <div class="page-header-title">
                  <h4>{{__('Module')}}</h4>
               </div>
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item">
                       
                        <i class="icofont icofont-home"></i>
                       
                     </li>
                     <li class="breadcrumb-item">{{__('Module List')}}
                     </li>
                    
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
                        
                        <div class="card-block table-border-style">
                           <div class="table-responsive">
                              <table class="table table-bordered">
                              <thead>
                                 <tr>
                                    <th>{{__('Module Name')}}</th>
                                    <th>{{__('Module Term')}}</th>
                                    <th>{{__('Link')}}</th>
                                    <th>{{__('Action')}}</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @if($modules)
                                 @foreach($modules as $module)
                                 <tr>
                                    <td>{{$module->name}}</td>
                                    <td>{{$module->term}}</td>
                                    <td><a href="{{ route('admin.modules.data',$module->slug)}}">{{__('Link')}}</a></td>
                                    <td>
                                       <a class="btn btn-success" href="{{route('admin.modules.edit',$module->id)}}" role="button">{{__('Edit')}}</a>
                                       <a class="btn btn-danger delete" href="{{route('admin.modules.delete',$module->id)}}" role="button">{{__('Delete')}}</a>
                                    </td>
                                 </tr>
                                 @endforeach
                                 @endif
                              </tbody>
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
