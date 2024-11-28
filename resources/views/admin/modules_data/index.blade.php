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
                  <h4>{{$module->name}}</h4>
               </div>
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item">
                       
                        <i class="icofont icofont-home"></i>
                       
                     </li>
                     <li class="breadcrumb-item">{{$module->name}}
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
                        <div class="card-header">
                           <h5>{{$module->name}} {{__('List')}}</h5>
                           
                           <div class="card-header-right">
                              <i class="icofont icofont-rounded-down"></i>
                              <i class="icofont icofont-refresh"></i>
                              <i class="icofont icofont-close-circled"></i>
                           </div>
                        </div>
                        <div class="card-block">
                           <div class="dt-responsive table-responsive">
                              <table align="center" id="fix-header" class="table table-striped  nowrap table-bordered">
                              <thead>
                                <tr role="row" class="filter"> 
                                  @if($module->is_image)
                                  <td></td>
                                  @endif
                                            <td><input type="text" class="form-control" name="title" id="title" autocomplete="off" placeholder="Search Title"></td>
                                            @if($module->category)
                                            <td>
                                              {!! Form::select('category', [''=>'Select '.$parent->term]+dataArray($module->parent_id), null, array('class'=>'form-control', 'id'=>'category', 'required'=>'required')) !!}
                                            </td>
                                            @else
                                            <td></td>
                                            @endif
                                                                  
                                            <td>
                                              <select name="status" id="status"  class="form-control status">
                                                    <option value="">{{__('Select Status')}}</option>
                                                    <option value="active">{{__('Active')}}</option>
                                                    <option value="blocked">{{__('Blocked')}}</option>
                                                </select>
                                              </td>
                                              <td></td>
                                            </tr>
                                 <tr>
                                    @if($module->is_image)
                                    <th>{{__('Image')}}</th>
                                    @endif
                                    <th>{{__('Title')}}</th>
                                    @if($module->category)
                                            <th>
                                              {!! $parent->term !!}
                                            </th>
                                            @else
                                            <th>{{__('Created Date')}}</th>
                                            @endif
                                    
                                    <th>{{__('Status')}}</th>
                                    <th>{{__('Action')}}</th>
                                 </tr>
                              </thead>
                              <tbody>
                                
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
@push('js')
<script type="text/javascript">
  $(function () {
        var oTable = $('#fix-header').DataTable({
            processing: true,
            serverSide: true,
            stateSave: true,
            searching: false,
            /*    
             "order": [[1, "asc"]],            
             paging: true,
             info: true,
             */

            @if($module->is_image)
            @if($module->category)
            ajax: {
                url: '{!! route('admin.modules.data.fetch') !!}',
                data: function (d) {
                    d.id = '{{$module->id}}';
                    d.title = $('input[name=title]').val();
                    d.category = $('#category').val();
                    d.status = $('#status').val();
                }
            }, columns: [
                {data: 'image', name: 'image'},
                {data: 'title', name: 'title'},
                {data: 'category', name: 'category'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
            @else
            ajax: {
                url: '{!! route('admin.modules.data.fetch') !!}',
                data: function (d) {
                    d.id = '{{$module->id}}';
                    d.title = $('input[name=title]').val();
                    d.status = $('#status').val();
                }
            }, columns: [
                {data: 'image', name: 'image'},
                {data: 'title', name: 'title'},
                {data: 'created_date', name: 'created_date'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
            @endif
            
            @else

            @if($module->category)
            ajax: {
                url: '{!! route('admin.modules.data.fetch') !!}',
                data: function (d) {
                    d.id = '{{$module->id}}';
                    d.title = $('input[name=title]').val();
                    d.category = $('#category').val();
                    d.status = $('#status').val();
                }
            }, columns: [
                {data: 'title', name: 'title'},
                {data: 'category', name: 'category'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
            @else
            ajax: {
                url: '{!! route('admin.modules.data.fetch') !!}',
                data: function (d) {
                    d.id = '{{$module->id}}';
                    d.title = $('input[name=title]').val();
                    d.status = $('#status').val();
                }
            }, columns: [
                {data: 'title', name: 'title'},
                {data: 'created_date', name: 'created_date'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
            @endif
            
            @endif 
            
        });

        $('#title').on('keyup', function (e) {
            oTable.draw();
            e.preventDefault();
        });
        $('#category').on('change', function (e) {
            oTable.draw();
            e.preventDefault();
        });
        $('#status').on('change', function (e) {
            oTable.draw();
            e.preventDefault();
        });
        
        
    });
   
   
</script>
<script type="text/javascript" src="{{asset('admin/assets/js/modules_data.js')}}"></script>

@endpush