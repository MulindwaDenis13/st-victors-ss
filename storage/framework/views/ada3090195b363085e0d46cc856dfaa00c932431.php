<nav class="navbar header-navbar pcoded-header" header-theme="theme4" pcoded-header-position="fixed">
   <div class="navbar-wrapper">
      <div class="navbar-logo">
         <a class="mobile-menu" id="mobile-collapse" href="#!">
         <i class="ti-menu"></i>
         </a>
        
         <a href="<?php echo e(url('/admin')); ?>">
         <img class="img-fluid" src="<?php echo e(asset('images/'.widget(1)->extra_image_1)); ?>" alt="Theme-Logo" />
         </a>
         <a class="mobile-options">
         <i class="ti-more"></i>
         </a>
      </div>
      <div class="navbar-container container-fluid">
         <div>
            <ul class="nav-left">
               <li>
                  <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
               </li>
             
               
            </ul>
            <ul class="nav-right">
               
               <li class="header-notification">
                  <a href="<?php echo e(route('admin.contact-us-messages')); ?>">
                  <i class="ti-bell"></i>
                  <?php if(messages_count()): ?>
                  <span class="badge"><?php echo e(messages_count()); ?></span>
                  <?php endif; ?>
                  </a>
                  <ul class="show-notification">
                      <?php if(null!==(messages())): ?>
                      <li>
                        <h6>Notifications</h6>
                        <label class="label label-danger"><?php echo e(__('New')); ?></label>
                     </li>
                    
                     <?php $__currentLoopData = messages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <li>
                        <div class="media">
                          
                           <div class="media-body">
                              <h5 class="notification-user"><?php echo e($mes->first_name); ?> <?php echo e($mes->last_name); ?></h5>
                              <p class="notification-msg"><?php echo \Illuminate\Support\Str::limit(strip_tags($mes->message), 50, '...'); ?></p>
                              <span class="notification-time"><?php echo e(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $mes->created_at)->diffForHumans()); ?> ago</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php endif; ?>
                     
                  </ul>
               </li>
              
               <li class="user-profile header-notification">
                  <a href="#!">
                  <span><?php echo e(Auth::guard('admin')->user()->name); ?></span>
                  <i class="ti-angle-down"></i>
                  </a>
                  <ul class="show-notification profile-notification">
                     
                     <li>
                        
                        <a href="<?php echo e(route('admin.logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="ti-layout-sidebar-left"></i> <?php echo e(__('Logout')); ?>

                        </a>
                        <form id="logout-form" action="<?php echo e(route('admin.logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                     </li>
                  </ul>
               </li>
            </ul>
            <!-- search -->
            
            <!-- search end -->
         </div>
      </div>
   </div>
</nav><?php /**PATH /Users/pcu/Desktop/Projects/avon_files/resources/views/admin/includes/topbar.blade.php ENDPATH**/ ?>