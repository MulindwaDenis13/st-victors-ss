
<?php $__env->startSection('content'); ?>
<div class="pcoded-content">
   <div class="pcoded-inner-content">
      <!-- Main-body start -->
      <div class="main-body">
         <div class="page-wrapper">
            <!-- Page header start -->
            <div class="page-header">
               <?php if(session()->has('message.added')): ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo e(__('Task Done!')); ?></strong> <?php echo session('message.content'); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php endif; ?>
               <div class="page-header-title">
                  <h4><?php echo e($page->title); ?></h4>
               </div>
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item">
                        <a href="<?php echo e(url('/admin')); ?>">
                        <i class="icofont icofont-home"></i>
                        </a>
                     </li>
                    
                     <li class="breadcrumb-item"><?php echo e($page->title); ?>  <?php echo e(__('Components')); ?>

                     </li>
                  </ul>
               </div>
            </div>
            <!-- Page header end -->
            <!-- Page body start -->
            <?php if(null!==($widgets)): ?>
            <?php $__currentLoopData = $widgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $widget_data = null; ?>
            <div class="page-body" id="widget_<?php echo e($wid->id); ?>">
               <div class="row">
                  <div class="col-sm-12">
                     <!-- Basic Form Inputs card start -->
                     <div class="card">
                      <div class="card-header">
                           <h5><?php echo e($wid->title); ?></h5>
                           
                           <div class="card-header-right">
                              <i class="icofont icofont-rounded-down"></i>
                              <i class="icofont icofont-refresh"></i>
                              <i class="icofont icofont-close-circled"></i>
                           </div>
                        </div>
                        <div class="card-block">
                           <h4 class="sub-title"><?php echo e($wid->title); ?> <?php echo e(__('Inputs')); ?></h4>
                           <?php 

                              $widget_data = App\Models\WidgetsData::where('widget_id',$wid->id)->first()
                            ?>
                          <?php if(null!==($widget_data)): ?>
                          <?php echo Form::model($widget_data, array('method' => 'post', 'route' => array('admin.widget_data.store',$wid->id), 'class' => 'form', 'files'=>true)); ?>

                           
                          <?php else: ?>
                          <?php echo Form::open(array('method' => 'post', 'route' => array('admin.widget_data.store',$wid->id), 'class' => 'form', 'files'=>true)); ?>

                           
                          <?php endif; ?>
                           <?php echo Form::hidden('id', $wid->id); ?>

                           <?php echo $__env->make('admin.widgets_data.inc.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                           <div class="row">
                              <div class="col-md-5"></div>
                              <div class="col-md-4"><button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button></div>
                           </div>

                           <?php echo Form::close(); ?>

                           
                        </div>

                     </div>
                  </div>
               </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <!-- Page body end -->
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>

<?php echo $__env->make('admin.widgets_data.widgetfiler', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/pcu/Desktop/Projects/avon_files/resources/views/admin/widgets_data/index.blade.php ENDPATH**/ ?>