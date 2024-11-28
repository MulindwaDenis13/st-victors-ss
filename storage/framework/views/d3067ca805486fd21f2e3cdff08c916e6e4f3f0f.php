
<?php $__env->startSection('content'); ?>
<section class="page-title-area">
  <div class="container">
	  <div class="page-title">
    <div class="row">
      <div class="col-lg-6">
        
          <h3 class="title"><?php echo e($service->title); ?></h3>
          
        
      </div>
		<div class="col-lg-6">
		<nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></li>
              <li class="breadcrumb-item active" aria-current="page"><?php echo e($service->title); ?></li>
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
    
    <div class="service_details">
<div class="row">
<div class="col-lg-7">

<p><?php echo $service->description; ?>

</p>

</div>

<div class="col-lg-5">
<div class="service_del_img"><img src="<?php echo e(asset('images/'.$service->image)); ?>"></div>

<div class="callWrp">

<div class="getquoteBx">
	<img src="<?php echo e(url('/images/support-icon.svg')); ?>" alt="<?php echo e(__('Contact Us')); ?>">
<h4><?php echo e(__('Contact us for more information or to start a project with us')); ?>.</h4>
<a href="<?php echo e(url('contact-us')); ?>" class="qtbtn"><?php echo e(__('Contact Us')); ?></a>

</div>




</div>
	
</div>

</div>


</div>
    
  </div>
</section>
<!-- Inner Content Start -->

<!-- Inner Content Start --> 
<!-- Inner Content Start --> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/pcu/Desktop/Projects/avon_files/resources/views/services/detail.blade.php ENDPATH**/ ?>