
<?php $__env->startSection('content'); ?>
<div class="pcoded-content">
   <div class="pcoded-inner-content">
      <!-- Main-body start -->
      <div class="main-body">
         <div class="page-wrapper">
            <!-- Page header start -->
            <div class="page-header">
               <div class="page-header-title">
                  <h4><?php echo e($module->term); ?> <?php echo e(__('Inputs')); ?></h4>
               </div>
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item">
                        
                        <i class="icofont icofont-home"></i>
                        
                     </li>
                     <li class="breadcrumb-item"><?php echo e($module->term); ?>  <?php echo e(__('Components')); ?>

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
                           <h5><?php echo e(__('Add')); ?> <?php echo e($module->term); ?> </h5>
                           
                           <div class="card-header-right">
                              <i class="icofont icofont-rounded-down"></i>
                              <i class="icofont icofont-refresh"></i>
                              <i class="icofont icofont-close-circled"></i>
                           </div>
                        </div>
                        <div class="card-block">
                           
                           <?php echo Form::open(array('method' => 'post', 'route' => array('admin.modules.data.store',$module->name), 'class' => 'form', 'files'=>true)); ?>

                           <?php echo $__env->make('admin.modules_data.inc.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                           <div class="row">
                              <div class="col-md-5"></div>
                              <div class="col-md-4"><button type="submit" class="btn btn-primary"><?php echo e(__('Create')); ?></button></div>
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
<script src="<?php echo e(asset('admin/assets/pages/filer/jquery.fileuploads.init.js')); ?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo e(asset('admin/assets/js/modules_data.js')); ?>"></script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/pcu/Desktop/Projects/avon_files/resources/views/admin/modules_data/add.blade.php ENDPATH**/ ?>