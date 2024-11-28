
<?php $__env->startSection('content'); ?>
<section class="page-title-area">
  <div class="container">
	   <div class="page-title">
    <div class="row">
      <div class="col-lg-6">
       
          <h3 class="title"><?php echo e(__('Services')); ?> </h3>          
          
       
      </div>
	<div class="col-lg-6">	
		<nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></li>
              <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Services')); ?></li>
            </ol>
          </nav>
	</div>	
    </div>
		    </div>
    <!-- row --> 
  </div>
</section>
<section class="innerPages blogWrap">
  <div class="container">
    	
	  
     <div class="service-grids row clearfix">
      <?php if(null!==($services)): ?>
      <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-lg-4 col-md-6">
		<div class="servimg"><img src="<?php echo e(asset('images/thumb/'.$service->image)); ?>"></div>
        <div class="grid">          
          <h3><a href="<?php echo e(route('services.detail',$service->slug)); ?>"><?php echo e($service->title); ?></a></h3>
          <p><?php echo \Illuminate\Support\Str::limit(strip_tags($service->description), 100, '...'); ?></p>
        </div>
		</div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
     </div>
     
     
  </div>
</section>
<!-- Inner Heading End --> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/pcu/Desktop/Projects/avon_files/resources/views/services/index.blade.php ENDPATH**/ ?>