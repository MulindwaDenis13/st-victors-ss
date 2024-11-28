

<?php $__env->startSection('content'); ?>
   <section class="page-title-area">
	<div class="container">
		<div class="page-title">
		<div class="row">
			<div class="col-lg-6">                    
				<h3 class="title"><?php echo e(__('Testimonials')); ?></h3>                   
			</div>				
			<div class="col-lg-6">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></li>
						<li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Testimonials')); ?></li>
					</ol>
				</nav>
			</div>
		</div>
		</div>
				<!-- row -->
        </div>
    </section>
    <section class="innerPages testimonialsWrap">
  <div class="container">
            <ul class="">
              <?php if(null!==(module(5))): ?>
              <?php $__currentLoopData = module(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimoinial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="item">
                    <div class="testimonials_sec">
                        <div class="client_box">
							 <div class="clientImg"><img alt="" src="<?php echo e(asset('images/thumb/'.$testimoinial->image)); ?>"></div>
                            <div class="authorDetail">
                                <h3><?php echo e($testimoinial->title); ?> <span><?php echo e($testimoinial->extra_field_1); ?></span></h3>
                                <ul class="unorderList starWrp">
                                    <?php if($testimoinial->extra_field_2 == 5){?>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="fas fa-star"></i></li>
                                  <?php }else if($testimoinial->extra_field_2 == 4){ ?>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                  <?php }else if($testimoinial->extra_field_2 == 3){ ?>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                  <?php }else if($testimoinial->extra_field_2==2){ ?>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                  <?php }else if($testimoinial->extra_field_2==1){ ?>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                  <?php }else if($testimoinial->extra_field_2==0){ ?>
                                      <li><i class="far fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                  <?php } ?>
                                </ul>
                            </div>
                           
                        </div>
                        <?php echo $testimoinial->description; ?>

                    </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </ul>
         
  </div>
</section>
<!-- Inner Heading End -->
 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/pcu/Desktop/Projects/avon_files/resources/views/pages/testimonials.blade.php ENDPATH**/ ?>