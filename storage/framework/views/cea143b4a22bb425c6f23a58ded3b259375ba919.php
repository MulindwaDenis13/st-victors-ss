

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
    <div class="row">
      <div class="col-lg-7 col-md-12">
        <div class="post-desc">           
      		<p><?php echo $cms->description; ?></p>
        </div>
      </div>
      <aside class="col-lg-5">
		  <?php if($cms->image!='' && null!==($cms->image)): ?>
          <div class="about__img"><img src="<?php echo e(asset('images/'.$cms->image)); ?>" class="d-block w-100" /></div>
          <?php endif; ?>
		  
		  <div class="callWrp">

<div class="getquoteBx">
	<img src="<?php echo e(url('/images/support-icon.svg')); ?>" alt="<?php echo e(__('Contact Us')); ?>">
<h4><?php echo e(__('Contact us for more information or to start a project with us')); ?>.</h4>
<a href="<?php echo e(url('contact-us')); ?>" class="qtbtn"><?php echo e(__('Contact Us')); ?></a>
</div>




</div>
		  
		  
      </aside>
    </div>
  </div>
</section>



<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/pcu/Desktop/Projects/avon_files/resources/views/pages/cms.blade.php ENDPATH**/ ?>