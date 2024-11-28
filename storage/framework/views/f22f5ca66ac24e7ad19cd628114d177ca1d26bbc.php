
<?php $__env->startSection('content'); ?>
<!-- Inner Heading Start -->
<section class="page-title-area">
    <div class="container">
		<div class="page-title">
        <div class="row">
            <div class="col-lg-6">
                
                    <h3 class="title"><?php if(isset(request()->keyword)): ?>
                             <?php echo e(request()->keyword); ?>

                             <?php else: ?>
                             Blog
                             <?php endif; ?></h3>
                    
                   
                </div>
			<div class="col-lg-6">
			 <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php if(isset(request()->keyword)): ?>
                             <?php echo e(request()->keyword); ?>

                             <?php else: ?>
                             Blog
                             <?php endif; ?>
                           </li>
                        </ol>
                    </nav>
            </div>
            </div>
        </div> <!-- row -->
    </div>
</section>


<!-- Inner Heading End --> 
<!-- Inner Content Start -->

<section class="innerPages blogWrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12">
         <div class="row">
          <?php if(null!==($blogs)): ?>
          <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <div class="col-lg-6">
              <div class="post">
                  <div class="post-image"> <img class="img-fluid" src="<?php echo e(asset('images/thumb/'.$blog->image)); ?>" alt=""> </div>
                  <div class="post-desc">
                      <div class="date"><?php echo e(date('d',strtotime($blog->created_at))); ?><span><?php echo e(date('M',strtotime($blog->created_at))); ?></span></div>
                      <div class="post-title">
                          <h4><a href="<?php echo e(route('blogs.detail',$blog->slug)); ?>"><?php echo e($blog->title); ?></a></h4>
                      </div>
                      <p><?php echo \Illuminate\Support\Str::limit(strip_tags($blog->description), 90, '...'); ?></p>
                      <a href="<?php echo e(route('blogs.detail',$blog->slug)); ?>" class="primary-btn btn">Read More<i class="fas fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
    </div>




<div class="row">
                        <div class="col-12">
                            <ul class="custom pagination justify-content-center mt-4 mb-md-80"><?php if(isset($blogs) && count($blogs)): ?>
                  <?php echo e($blogs->appends(request()->query())->links()); ?>

                  <?php endif; ?></ul>
                        </div>
                    </div>
      </div>
      <aside class="col-lg-4">
                    <div class="sidebar">
                        <div class="widget search-widget mb-xl-30">
                            <h5 class="widget-title"><?php echo e(__('Search')); ?></h5>
                            <form action="<?php echo e(route('blogs.list')); ?>">
                                <input type="text" name="keyword" placeholder="Search your keyword...">
                                <button type="submit"><i class="fas fa-search"></i> </button>
                            </form>
                        </div>
                         <?php if(null!==($recent_data)): ?> 
                        <div class="widget popular-feeds mb-xl-30">
                            <h5 class="widget-title"><?php echo e(__('Popular Feeds')); ?></h5>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/pcu/Desktop/Projects/avon_files/resources/views/blogs/index.blade.php ENDPATH**/ ?>