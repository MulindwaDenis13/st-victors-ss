

<?php $__env->startSection('content'); ?>

<!-- Inner Heading Start -->
<section class="page-title-area">
  <div class="container">
	   <div class="page-title">
    <div class="row">
      <div class="col-lg-6">       
          <h3 class="title"><?php echo e($cms->title); ?></h3>        
      </div>
		
	<div class="col-lg-6">	
		<nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></li>
              <li class="breadcrumb-item active" aria-current="page"><?php echo e($cms->title); ?></li>
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
    
        <div class="featuredWrapp">
        <p><?php echo $cms->description; ?></p>       
        
          <div id="accordionExample" class="accordion">
            <?php if($features): ?>
            <?php
            $count = 1;
            ?>
            <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
              <div id="heading<?php echo e($count); ?>" class="card-header bg-white shadow-sm border-0">
                <h2 class="mb-0">
                  <?php if($count==1): ?>
                  <button type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($count); ?>" aria-expanded="true" aria-controls="collapseOne" class="btn btn-link text-dark font-weight-bold text-uppercase collapsible-link"><?php echo e($feature->title); ?></button>
                  <?php else: ?>
                  <button type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($count); ?>" aria-expanded="false" aria-controls="collapseTwo" class="btn btn-link collapsed text-dark font-weight-bold text-uppercase collapsible-link"><?php echo e($feature->title); ?></button>
                  <?php endif; ?>
                </h2>
              </div>
              <div id="collapse<?php echo e($count); ?>" aria-labelledby="heading<?php echo e($count); ?>" data-bs-parent="#accordionExample" class="collapse <?php if($count==1): ?> show <?php else: ?> hide <?php endif; ?>">
                <div class="card-body p-3">
                  <p class="font-weight-light m-0"><?php echo $feature->description; ?></p>
                </div>
              </div>
            </div>
             <?php
            $count ++;
            ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
          </div>
          <!-- End --> 
          
        </div>
     
  </div>
</section>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/pcu/Desktop/Projects/avon_files/resources/views/pages/features.blade.php ENDPATH**/ ?>