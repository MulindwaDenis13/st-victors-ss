
<?php $__env->startSection('content'); ?>

<?php if(widget(1)->radio_button_1 == 1): ?>
    <!-- Slider Section -->
    <div class="tp-banner-container" id="slider">
        <div class="tp-banner">
            <ul>
                <?php if(null !== (module(1))): ?>
                            <?php $__currentLoopData = module(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <!-- <li data-slotamount="7" data-transition="fade" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="images/dummy.png" data-lazyload="<?php echo e(asset('images/'.$slider->image)); ?>">
                                    <div class="caption lfb large-title tp-resizeme slidertext2" data-x="center" data-y="280" data-speed="600" data-start="1000"><?php echo e($slider->title); ?></div>
                                    <div class="caption lfb large-title tp-resizeme slidertext1" data-x="center" data-y="310" data-speed="600" data-start="1600"><?php echo e($slider->extra_field_1); ?></div>
                                    <div class="caption lfb large-title tp-resizeme sliderbtn" data-x="center" data-y="380" data-speed="600" data-start="2200"><a href="<?php echo ($slider->extra_field_3); ?>" class="section-btn"><?php echo e($slider->extra_field_2); ?></a></div>
                                  </li> -->
                                        <li data-slotamount="7" data-transition="fade" data-masterspeed="1000" data-saveperformance="on"
                                            style="background: url('<?php echo e(asset('images/' . $slider->image)); ?>') no-repeat center; background-size: cover;">
                                            <div class="caption lfb large-title tp-resizeme slidertext2" data-x="center" data-y="280"
                                                data-speed="600" data-start="1000">
                                                <?php echo e($slider->title); ?>

                                            </div>
                                            <div class="caption lfb large-title tp-resizeme slidertext1" data-x="center" data-y="310"
                                                data-speed="600" data-start="1600">
                                                <?php echo e($slider->extra_field_1); ?>

                                            </div>
                                            <div class="caption lfb large-title tp-resizeme sliderbtn" data-x="center" data-y="380" data-speed="600"
                                                data-start="2200">
                                                <a href="<?php echo ($slider->extra_field_3); ?>" class="section-btn"><?php echo e($slider->extra_field_2); ?></a>
                                            </div>
                                        </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <!-- Slider End -->
<?php else: ?>
    <div class="slider-wrap"
        style="background: url('<?php echo e(asset('images/' . widget(16)->extra_image_2)); ?>') no-repeat center; background-size: cover;">
        <div class="container">
            <div class="banner_info wow fadeInUp" data-wow-duration="2s">
                <h1><?php echo e(widget(16)->extra_field_1); ?></h1>
                <h2><?php echo e(widget(16)->extra_field_2); ?></h2>
                <p><?php echo widget(16)->extra_field_3; ?></p>
                <a href="<?php echo e(url('/contact-us')); ?>" class="btn btn-primary mt-3"><?php echo e(widget(16)->extra_field_4); ?></a>
            </div>
        </div>
    </div>

<?php endif; ?>

<!-- About Start -->
<section class="aboutWrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-img"><img src="<?php echo e(asset('images/' . widget(17)->extra_image_1)); ?>" alt=""></div>
            </div>

            <div class="col-lg-6">
                <div class="section-title">

                    <?php if(Auth::guard('admin')->user()): ?>
                        <div class="edit_option">
                            <a target="_blank" href="<?php echo e(route('admin.widgets_data', widgetPage(17)->slug)); ?>#widget_17"><i
                                    class="fas fa-edit"></i></a>
                        </div>
                    <?php endif; ?>

                    <h2><?php echo widget(17)->extra_field_1; ?></h2>
                    <p><?php echo e(widget(17)->description); ?></p>
                </div>
                <ul class="core-features">
                    <li>
                        <div class="aboutIconImg"><img src="<?php echo e(asset('images/about-icon1.png')); ?>" /></div>
                        <div class="aboutContent">
                            <h4><?php echo e(widget(17)->extra_field_2); ?></h4>
                            <p><?php echo e(widget(17)->extra_field_3); ?></p>
                        </div>
                    </li>
                    <li>
                        <div class="aboutIconImg"><img src="<?php echo e(asset('images/about-icon2.png')); ?>" /></div>
                        <div class="aboutContent">
                            <h4><?php echo e(widget(17)->extra_field_4); ?></h4>
                            <p><?php echo e(widget(17)->extra_field_5); ?></p>
                        </div>
                    </li>
                    <li>
                        <div class="aboutIconImg"><img src="<?php echo e(asset('images/about-icon3.png')); ?>" /></div>
                        <div class="aboutContent">
                            <h4><?php echo e(widget(17)->extra_field_6); ?></h4>
                            <p><?php echo e(widget(17)->extra_field_7); ?></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</section>

<!-- Services Start -->
<section class="servieWrap">
    <div class="container">
        <div class="section-title">

            <?php if(Auth::guard('admin')->user()): ?>
                <div class="edit_option">
                    <a target="_blank" href="<?php echo e(route('admin.widgets_data', widgetPage(18)->slug)); ?>#widget_18"><i
                            class="fas fa-edit"></i></a>
                </div>
            <?php endif; ?>

            <h2><span><?php echo e(widget(18)->extra_field_1); ?></span><?php echo e(widget(18)->extra_field_2); ?></h2>
            <p><?php echo widget(18)->extra_field_3; ?></p>
        </div>
        <div class="homeservices row">
            <?php if(module(14)): ?>
                <?php $__currentLoopData = module(14, 6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 text-center">

                        <div class="service-box">
                            <div class="serviceimage"><img src="<?php echo e(asset('images/thumb/' . $service->image)); ?>"></div>
                            <div class="details">
                                <h4><a href="<?php echo e(route('services.detail', $service->slug)); ?>"><?php echo e($service->title); ?></a></h4>
                                <p><?php echo \Illuminate\Support\Str::limit(strip_tags($service->description), 100, '...'); ?></p>
                                <a href="<?php echo e(route('services.detail', $service->slug)); ?>" class="btn-primary btn"><i
                                        class="fas fa-plus-circle"></i> <?php echo e(__('View Details')); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>


        </div>
    </div>
</section>

<!-- Why Choose us Start -->
<section class="featureWrap">
    <div class="container">
        <div class="section-title">
            <div class="edit_option">
                <?php if(Auth::guard('admin')->user()): ?>
                    <a target="_blank" href="<?php echo e(route('admin.widgets_data', widgetPage(19)->slug)); ?>#widget_19"><i
                            class="fas fa-edit"></i></a>
                <?php endif; ?>
            </div>
            <h5><?php echo e(widget(19)->extra_field_1); ?></h5>
            <h2><?php echo e(widget(19)->extra_field_2); ?></h2>
            <p><?php echo e(widget(19)->extra_field_3); ?></p>
        </div>

        <ul class="core-features row">
            <li class="col-lg-3 col-md-6">
                <div class="aboutIconImg"><i class="fas fa-users"></i></div>
                <div class="aboutContent">
                    <h4><?php echo e(widget(19)->extra_field_4); ?></h4>
                    <p><?php echo e(widget(19)->extra_field_5); ?></p>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="aboutIconImg"><i class="fas fa-lightbulb"></i></div>
                <div class="aboutContent">
                    <h4><?php echo e(widget(19)->extra_field_6); ?></h4>
                    <p><?php echo e(widget(19)->extra_field_7); ?></p>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="aboutIconImg"><i class="fas fa-laptop"></i></div>
                <div class="aboutContent">
                    <h4><?php echo e(widget(19)->extra_field_8); ?></h4>
                    <p><?php echo e(widget(19)->extra_field_9); ?></p>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="aboutIconImg"><i class="fas fa-mobile-alt"></i></div>
                <div class="aboutContent">
                    <h4><?php echo e(widget(19)->extra_field_10); ?></h4>
                    <p><?php echo e(widget(19)->extra_field_11); ?></p>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="aboutIconImg"><i class="far fa-calendar-check"></i></div>
                <div class="aboutContent">
                    <h4><?php echo e(widget(19)->extra_field_12); ?></h4>
                    <p><?php echo e(widget(19)->extra_field_13); ?></p>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="aboutIconImg"><i class="fas fa-phone-alt"></i></div>
                <div class="aboutContent">
                    <h4><?php echo e(widget(19)->extra_field_14); ?></h4>
                    <p><?php echo e(widget(19)->extra_field_15); ?></p>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="aboutIconImg"><i class="fas fa-tags"></i></div>
                <div class="aboutContent">
                    <h4><?php echo e(widget(19)->extra_field_16); ?></h4>
                    <p><?php echo e(widget(19)->extra_field_17); ?></p>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="aboutIconImg"><i class="fas fa-people-carry"></i></div>
                <div class="aboutContent">
                    <h4><?php echo e(widget(19)->extra_field_18); ?></h4>
                    <p><?php echo e(widget(19)->extra_field_19); ?></p>
                </div>
            </li>
        </ul>

    </div>
</section>





<!-- <div class="section industriesbg">
    <div class="container wow fadeInUp" data-wow-duration="2s">
        <div class="section-title">
            <h5>Best IT Service</h5>
            <h2>Industries We Serve</h2>
            <p>Grursus mal suada faci lisis lorem ipsum dolarorit more ame ion consectetur elit vesti at bulum nec odio aea the dumm ipsumm recreo that dolocons.</p>
        </div>

        <div class="row">
            <?php if(module(20)): ?>
            <?php $__currentLoopData = module(20,12); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $industry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="indsbox">
                    <div class="indico"><img src="<?php echo e(asset('images/'.$industry->image)); ?>" alt="<?php echo e($industry->title); ?>"></div>
                    <h3><?php echo e($industry->title); ?></h3>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
            <?php endif; ?> 

        </div>

        <div class="text-center mt-5">
            <a href="<?php echo e(url('/industries')); ?>" class="btn btn-primary">View All Industries</a>
        </div>


        </div>
</div> -->




<!-- Technologies start -->
<!-- <div class="section wow fadeInUp" data-wow-duration="2s">
         <div class="container">
            <div class="section-title">
               <h2>Technologies We Work With</h2>
               <p>Grursus mal suada faci lisis lorem ipsum dolarorit more ame ion consectetur elit vesti at bulum nec odio aea the dumm ipsumm recreo that dolocons.</p>
            </div>

            <ul class="techlist">
                <?php if(module(21)): ?>
                <?php $__currentLoopData = module(21,16); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $technolgy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><img src="<?php echo e(asset('images/'.$technolgy->image)); ?>" alt="<?php echo e($technolgy->title); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo e($technolgy->title); ?>"></li> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                <?php endif; ?>                    
            </ul>

            <div class="text-center mt-5">
            <a href="<?php echo e(url('/technologies')); ?>" class="btn btn-primary">View All Technologies</a>
            </div>

         </div>
      </div> -->
<!-- Technologies end -->




<!-- Fun Fatcs Start -->
<section class="counterWrap">
    <div class="edit_option">
        <?php if(Auth::guard('admin')->user()): ?>
            <a target="_blank" href="<?php echo e(route('admin.widgets_data', widgetPage(21)->slug)); ?>#widget_21"><i
                    class="fas fa-edit"></i></a>
        <?php endif; ?>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-lg-3">
                <div class="counter">
                    <h3><?php echo e(widget(21)->extra_field_1); ?></h3>
                    <h2 class="timer count-title count-number" data-to="<?php echo e(widget(21)->extra_field_2); ?>"
                        data-speed="1500"></h2>
                    <p class="count-text "><?php echo e(widget(21)->extra_field_3); ?></p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="counter">
                    <h3><?php echo e(widget(21)->extra_field_4); ?></h3>
                    <h2 class="timer count-title count-number" data-to="<?php echo e(widget(21)->extra_field_5); ?>"
                        data-speed="1500"></h2>
                    <p class="count-text "><?php echo e(widget(21)->extra_field_6); ?></p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="counter">
                    <h3><?php echo e(widget(21)->extra_field_7); ?></h3>
                    <h2 class="timer count-title count-number" data-to="<?php echo e(widget(21)->extra_field_8); ?>"
                        data-speed="1500"></h2>
                    <p class="count-text "><?php echo e(widget(21)->extra_field_9); ?></p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="counter">
                    <h3><?php echo e(widget(21)->extra_field_10); ?></h3>
                    <h2 class="timer count-title count-number" data-to="<?php echo e(widget(21)->extra_field_11); ?>"
                        data-speed="1500"></h2>
                    <p class="count-text "><?php echo e(widget(21)->extra_field_12); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Work Start -->
<!-- <section class="workWrap">
        <div class="container">
            <div class="section-title">
              <div class="edit_option">
                <?php if(Auth::guard('admin')->user()): ?>
                <a target="_blank" href="<?php echo e(route('admin.widgets_data',widgetPage(23)->slug)); ?>#widget_23"><i class="fas fa-edit"></i></a>
                <?php endif; ?>
              </div>
                <h5><?php echo e(widget(23)->extra_field_1); ?></h5>
                <h2><?php echo e(widget(23)->extra_field_2); ?></h2>
            </div>
            <div class="row">
              <?php if(module(17)): ?>
              <?php $__currentLoopData = module(17,6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-lg-4">
                    <div class="gallery-item-content">
                        <div class="item-thumbnail"><img src="<?php echo e(asset('images/'.$work->image)); ?>" alt="">
                            <div class="content-overlay">
                                <div class="content">
                                    <div class="links"> <a href="<?php echo e(route('work.detail',$work->slug)); ?>"> <i class="fas fa-long-arrow-alt-right"></i> </a> <a class="img-popup image-preview" href="<?php echo e(asset('images/'.$work->image)); ?>"> <i class="fas fa-search"></i> </a> </div>
                                    <?php 
                                      if ($work->category_ids) {
    $cate_ids = explode(",", $work->category_ids);
    $categories = App\Models\ModulesData::whereIn('id', $cate_ids)->get();

    $cate_array = array();
    foreach ($categories as $cat) {
        $cate_array[] = $cat->title;
    }

}

                                     ?>
                                    <div class="info">
                                        <p class="tag"><?php echo e(implode(' | ', $cate_array)); ?></p>
                                        <h4 class="project-name"><?php echo e($work->title); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
             <?php endif; ?>   
            </div>
            <div class="text-center mt-4"><a href="<?php echo e(url('/our-work')); ?>" class="btn-primary">View All Work</a></div>
        </div>
    </section> -->

<!-- Contact Start -->
<section class="thinkWrap">
    <div class="container">
        <div class="edit_option">
            <?php if(Auth::guard('admin')->user()): ?>
                <a target="_blank" href="<?php echo e(route('admin.widgets_data', widgetPage(20)->slug)); ?>#widget_20"><i
                        class="fas fa-edit"></i></a>
            <?php endif; ?>
        </div>
        <h2><?php echo widget(20)->extra_field_1; ?></h2>
        <p><?php echo e(widget(20)->extra_field_2); ?></p>
        <a href="<?php echo e(url('contact-us')); ?>" class="btn-primary"><?php echo e(widget(20)->extra_field_3); ?></a>
    </div>
</section>

<!-- Testimonials Start -->
<div class="testimonialsWrap">
    <div class="container">
        <div class="section-title">
            <div class="edit_option">
                <?php if(Auth::guard('admin')->user()): ?>
                    <a target="_blank" href="<?php echo e(route('admin.widgets_data', widgetPage(22)->slug)); ?>#widget_22"><i
                            class="fas fa-edit"></i></a>
                <?php endif; ?>
            </div>
            <p><?php echo e(widget(22)->extra_field_1); ?></p>
            <h2><?php echo e(widget(22)->extra_field_2); ?></h2>
        </div>
        <ul class="owl-carousel testimonials">
            <?php if(module(5)): ?>
                <?php $__currentLoopData = module(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="item">

                        <div class="testiBox">
                            <div class="quote"><img src="<?php echo e(asset('images/quote.png')); ?>" alt="Quotes"></div>
                            <p><?php echo e((strip_tags($testimonial->description))); ?></p>
                            <div class="ratingStars">
                                <ul>
                                    <?php        if ($testimonial->extra_field_2 == 5) {?>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <?php        } else if ($testimonial->extra_field_2 == 4) { ?>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <?php            } else if ($testimonial->extra_field_2 == 3) { ?>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <?php            } else if ($testimonial->extra_field_2 == 2) { ?>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <?php            } else if ($testimonial->extra_field_2 == 1) { ?>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <?php            } else if ($testimonial->extra_field_2 == 0) { ?>
                                    <li><i class="far fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <?php            } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="avatar"><img src="<?php echo e(asset('images/' . $testimonial->image)); ?>" alt="<?php echo e($testimonial->title); ?>">
                        </div>
                        <div class="author"><?php echo e($testimonial->title); ?><span
                                class="destination"><?php echo e($testimonial->extra_field_1); ?></span></div>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>
    </div>
</div>

<!-- Blog Start -->
<section class="blogWrap">
    <div class="container">
        <div class="section-title">
            <div class="edit_option">
                <?php if(Auth::guard('admin')->user()): ?>
                    <a target="_blank" href="<?php echo e(route('admin.widgets_data', widgetPage(24)->slug)); ?>#widget_24"><i
                            class="fas fa-edit"></i></a>
                <?php endif; ?>
            </div>
            <p><?php echo e(widget(24)->extra_field_1); ?></p>
            <h2><?php echo e(widget(24)->extra_field_2); ?></h2>
        </div>
        <div class="row">
            <?php if(module(9)): ?>
                <?php $__currentLoopData = module(9); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4">
                        <div class="post">
                            <div class="post-image"> <img class="img-fluid" src="<?php echo e(asset('images/thumb/' . $blog->image)); ?>"
                                    alt=""> </div>
                            <div class="post-desc">
                                <div class="date">
                                    <?php echo e(date('d', strtotime($blog->created_at))); ?><span><?php echo e(date('M', strtotime($blog->created_at))); ?></span>
                                </div>
                                <div class="post-title">
                                    <h4><a href="#"><?php echo e($blog->title); ?></a></h4>
                                </div>
                                <p><?php echo \Illuminate\Support\Str::limit(strip_tags($blog->description), 90, '...'); ?></p>
                                <a href="<?php echo e(route('blogs.detail', $blog->slug)); ?>" class="primary-btn btn">Read More<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/pcu/Desktop/Projects/avon_files/resources/views/welcome.blade.php ENDPATH**/ ?>