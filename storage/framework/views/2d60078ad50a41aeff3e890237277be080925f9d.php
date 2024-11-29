
<?php $__env->startSection('content'); ?>

<section class="page-title-area">
        <div class="container">
			<div class="page-title">
            <div class="row">
                <div class="col-lg-6">
                    
                        <h3 class="title"><?php echo e(__('Blog')); ?></h3>                        
                   
                </div>
				<div class="col-lg-6">
                   <nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Blog')); ?></li>
						</ol>
					</nav>
                </div>
            </div> <!-- row -->
			 </div>
        </div>
    </section>
<section class="innerPages blogWrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12">
         <div class="blog-post">
            <div class="post-image">
              <img class="img-fluid" src="<?php echo e(asset('images/'.$blog->image)); ?>" alt="">
            </div>
            <div class="post-desc">
              <div class="post-meta">
                <ul class="list-inline">
                  <li><i class="la la-calendar mr-1"></i> <?php echo e(date('jS F  Y', strtotime($blog->created_at))); ?></li>
                  <li><i class="la la-user mr-1"></i> <?php echo e(__('By Admin')); ?></li>
                </ul>
              </div>
              <div class="post-title">
                <h2><?php echo e($blog->title); ?></h2>
              </div>
              <p class="lead"><?php echo $blog->description; ?></p>
             
             

             

              
            </div>
          </div>
    
            
         
      </div>
    <aside class="col-lg-4">
                    <div class="sidebar">
                        <div class="widget search-widget mb-xl-30">
                            <h5 class="widget-title"><?php echo e(__('Search')); ?></h5>
                            <form action="<?php echo e(route('blogs.list')); ?>">
                                <input type="text" name="keyword" placeholder="<?php echo e(__('Search your keyword')); ?>...">
                                <button type="submit"><i class="fas fa-search"></i> </button>
                            </form>
                        </div>
                         <?php if(null!==($recent_data)): ?> 
                        <div class="widget popular-feeds mb-xl-30">
                            <h5 class="widget-title">Popular Feeds</h5>
                            <div class="popular-feed-loop">
                              <?php $__currentLoopData = $recent_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <div class="single-popular-feed">
                                    <div class="feed-img animate-img">
                                        <a href="news-detail.html">
                                            <img src="<?php echo e(asset('images/thumb/'.$recent->image)); ?>" class="image-fit" alt="<?php echo e($recent->title); ?>">
                                        </a>
                                    </div>
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="<?php echo e(route('blogs.detail',$recent->slug)); ?>"><?php echo e($recent->title); ?></a></h6>
                                        <span class="time"><i class="far fa-calendar-alt"></i> <?php echo e(date('jS F  Y', strtotime($recent->created_at))); ?></span>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                         <?php if(null!==(module(8))): ?> 
                        <div class="widget categories-widget mb-xl-30">
                            <h5 class="widget-title"><?php echo e(__('Categories')); ?></h5>
                            <ul class="custom">
                              <?php $__currentLoopData = module(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php 
                               $count = App\Models\ModulesData::where('module_id',9)->whereRaw("FIND_IN_SET($cate->id,category_ids)")->where('status','active')->count();
                                ?>
                                <li>
                                    <a href="<?php echo e(route('blogs.list','cate='.$cate->id)); ?>"><?php echo e($cate->title); ?><span><?php echo e($count); ?></span></a>
                                </li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                
                            </ul>
                        </div>
                        <?php endif; ?>
                          
                       
                    </div>
                </aside>
    </div>
  </div>
</section>
<!-- Inner Heading End --> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/pcu/Desktop/Projects/avon_files/resources/views/blogs/detail.blade.php ENDPATH**/ ?>