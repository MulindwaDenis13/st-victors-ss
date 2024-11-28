
<?php $__env->startSection('content'); ?>
<div class="pcoded-content">
   <div class="pcoded-inner-content">
      <!-- Main-body start -->
      <div class="main-body">
         <div class="page-wrapper">
            <!-- Page header start -->
            <div class="page-header">
              <?php if(session()->has('message.added')): ?>
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong><?php echo e(__('Task Done')); ?>!</strong> <?php echo session('message.content'); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php endif; ?>
               <div class="page-header-title">
                  <h4><?php echo e($module->name); ?></h4>
               </div>
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item">
                       
                        <i class="icofont icofont-home"></i>
                       
                     </li>
                     <li class="breadcrumb-item"><?php echo e($module->name); ?>

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
                           <h5><?php echo e($module->name); ?> <?php echo e(__('List')); ?></h5>
                           
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
                                  <?php if($module->is_image): ?>
                                  <td></td>
                                  <?php endif; ?>
                                            <td><input type="text" class="form-control" name="title" id="title" autocomplete="off" placeholder="Search Title"></td>
                                            <?php if($module->category): ?>
                                            <td>
                                              <?php echo Form::select('category', [''=>'Select '.$parent->term]+dataArray($module->parent_id), null, array('class'=>'form-control', 'id'=>'category', 'required'=>'required')); ?>

                                            </td>
                                            <?php else: ?>
                                            <td></td>
                                            <?php endif; ?>
                                                                  
                                            <td>
                                              <select name="status" id="status"  class="form-control status">
                                                    <option value=""><?php echo e(__('Select Status')); ?></option>
                                                    <option value="active"><?php echo e(__('Active')); ?></option>
                                                    <option value="blocked"><?php echo e(__('Blocked')); ?></option>
                                                </select>
                                              </td>
                                              <td></td>
                                            </tr>
                                 <tr>
                                    <?php if($module->is_image): ?>
                                    <th><?php echo e(__('Image')); ?></th>
                                    <?php endif; ?>
                                    <th><?php echo e(__('Title')); ?></th>
                                    <?php if($module->category): ?>
                                            <th>
                                              <?php echo $parent->term; ?>

                                            </th>
                                            <?php else: ?>
                                            <th><?php echo e(__('Created Date')); ?></th>
                                            <?php endif; ?>
                                    
                                    <th><?php echo e(__('Status')); ?></th>
                                    <th><?php echo e(__('Action')); ?></th>
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
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
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

            <?php if($module->is_image): ?>
            <?php if($module->category): ?>
            ajax: {
                url: '<?php echo route('admin.modules.data.fetch'); ?>',
                data: function (d) {
                    d.id = '<?php echo e($module->id); ?>';
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
            <?php else: ?>
            ajax: {
                url: '<?php echo route('admin.modules.data.fetch'); ?>',
                data: function (d) {
                    d.id = '<?php echo e($module->id); ?>';
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
            <?php endif; ?>
            
            <?php else: ?>

            <?php if($module->category): ?>
            ajax: {
                url: '<?php echo route('admin.modules.data.fetch'); ?>',
                data: function (d) {
                    d.id = '<?php echo e($module->id); ?>';
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
            <?php else: ?>
            ajax: {
                url: '<?php echo route('admin.modules.data.fetch'); ?>',
                data: function (d) {
                    d.id = '<?php echo e($module->id); ?>';
                    d.title = $('input[name=title]').val();
                    d.status = $('#status').val();
                }
            }, columns: [
                {data: 'title', name: 'title'},
                {data: 'created_date', name: 'created_date'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
            <?php endif; ?>
            
            <?php endif; ?> 
            
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
<script type="text/javascript" src="<?php echo e(asset('admin/assets/js/modules_data.js')); ?>"></script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/pcu/Desktop/Projects/avon_files/resources/views/admin/modules_data/index.blade.php ENDPATH**/ ?>