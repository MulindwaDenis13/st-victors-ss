<nav class="pcoded-navbar" pcoded-header-position="relative">
  <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
  <div class="pcoded-inner-navbar main-menu">
    <div class="">
    
		
		
      <div class="main-menu-content">
        <ul>
          <li class="more-details"> <a href="#!"><i class="ti-layout-sidebar-left"></i><?php echo e(__('Logout')); ?></a> </li>
        </ul>
      </div>
    </div>

	  <ul class="pcoded-item pcoded-left-item">
      <li class=" "> <a href="<?php echo e(url('/admin/home')); ?>" data-i18n="nav.form-wizard.main"> <span class="pcoded-micon"><i class="ti-home"></i></span> <span class="pcoded-mtext"><?php echo e(__('Dashboard')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
      <li class="pcoded-hasmenu"> <a href="javascript:void(0)" data-i18n="nav.navigate.main"> <span class="pcoded-micon"><i class="ti-user"></i></span> <span class="pcoded-mtext"><?php echo e(__('Admins')); ?></span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="<?php echo e(route('admin.admins')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('List Admins')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="<?php echo e(route('admin.admin.add')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('Add New Admin')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
        </ul>
      </li>
	<li class="pcoded-hasmenu">
            <a href="javascript:void(0)" data-i18n="nav.navigate.main">
            <span class="pcoded-micon"><i class="ti-layout-slider"></i></span>
            <span class="pcoded-mtext"><?php echo e(__('Slider')); ?></span>
            <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
               <li class=" ">
                  <a href="<?php echo e(route('admin.modules.data','slider')); ?>" data-i18n="nav.navigate.navbar">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext"><?php echo e(__('List Slide Images')); ?></span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>

               <li class=" ">
                  <a href="<?php echo e(route('admin.modules.data.add','slider')); ?>" data-i18n="nav.navigate.navbar">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext"><?php echo e(__('Add New Slide Image')); ?></span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
            </ul>
         </li>
		
      <li class="pcoded-hasmenu"> <a href="javascript:void(0)" data-i18n="nav.navigate.main"> <span class="pcoded-micon"><i class="ti-list"></i></span> <span class="pcoded-mtext"><?php echo e(__('Services')); ?></span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="<?php echo e(route('admin.modules.data','services')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('List Services')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="<?php echo e(route('admin.modules.data.add','services')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('Add New Service')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
        </ul>
      </li>

      <li class="pcoded-hasmenu"> <a href="javascript:void(0)" data-i18n="nav.navigate.main"> <span class="pcoded-micon"><i class="ti-list"></i></span> <span class="pcoded-mtext"><?php echo e(__('Industries')); ?></span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="<?php echo e(route('admin.modules.data','industries')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('List Industries')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="<?php echo e(route('admin.modules.data.add','industries')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('Add New Industry')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
        </ul>
      </li>

      <li class="pcoded-hasmenu"> <a href="javascript:void(0)" data-i18n="nav.navigate.main"> <span class="pcoded-micon"><i class="ti-list"></i></span> <span class="pcoded-mtext"><?php echo e(__('Technologies')); ?></span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="<?php echo e(route('admin.modules.data','technologies')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('List Technologies')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="<?php echo e(route('admin.modules.data.add','technologies')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('Add New Technology')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
        </ul>
      </li>


      <li class="pcoded-hasmenu"> <a href="javascript:void(0)"> <span class="pcoded-micon"><i class="ti-files"></i></span> <span class="pcoded-mtext" data-i18n="nav.page_layout.main"><?php echo e(__('Site Pages')); ?></span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="<?php echo e(route('admin.modules.data','cms-pages')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('List Site Pages')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="<?php echo e(route('admin.modules.data.add','cms-pages')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('Add New Page')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
        </ul>
      </li>
		  
		 
		  
      <li class="pcoded-hasmenu"> <a href="javascript:void(0)" data-i18n="nav.navigate.main"> <span class="pcoded-micon"><i class="ti-view-grid"></i></span> <span class="pcoded-mtext"><?php echo e(__('FAQs')); ?></span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="<?php echo e(route('admin.modules.data','faqs')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('List FAQs')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="<?php echo e(route('admin.modules.data.add','faqs')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('Add New FAQ')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
        </ul>
      </li>
      <li class="pcoded-hasmenu"> <a href="javascript:void(0)" data-i18n="nav.navigate.main"> <span class="pcoded-micon"><i class="ti-gallery"></i></span> <span class="pcoded-mtext"><?php echo e(__('Portfolio')); ?></span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="<?php echo e(route('admin.modules.data','portfolio')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('List Portfolio')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="<?php echo e(route('admin.modules.data.add','portfolio')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('Add New Portfolio')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
			
		<li class=""><a href="<?php echo e(route('admin.modules.data','work-categories')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('Portfolio Categories')); ?></span> <span class="pcoded-mcaret"></span> </a></li>
		<li class=""><a href="<?php echo e(route('admin.modules.data.add','work-categories')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('Add Category')); ?></span> <span class="pcoded-mcaret"></span> </a></li>
			
        </ul>
      </li>
      <li class="pcoded-hasmenu"> <a href="javascript:void(0)" data-i18n="nav.navigate.main"> <span class="pcoded-micon"><i class="ti-cloud-up"></i></span> <span class="pcoded-mtext"><?php echo e(__('Payments')); ?></span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="<?php echo e(route('admin.modules.data','payments')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('List Payments')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="<?php echo e(route('admin.modules.data.add','payments')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('Add New Payment')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
        </ul>
      </li>
      <li class="pcoded-hasmenu"> <a href="javascript:void(0)" data-i18n="nav.navigate.main"> <span class="pcoded-micon"><i class="ti-layout-cta-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('Blogs')); ?></span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="<?php echo e(route('admin.modules.data','blogs')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('List Blogs')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="<?php echo e(route('admin.modules.data.add','blogs')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('Add New Blog')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="<?php echo e(route('admin.modules.data','blog-categories')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('Blog Categories')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="<?php echo e(route('admin.modules.data.add','blog-categories')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('Add Blog Category')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
        </ul>
      </li>
      
      
      <li class="pcoded-hasmenu"> <a href="javascript:void(0)"> <span class="pcoded-micon"><i class="ti-direction-alt"></i></span> <span class="pcoded-mtext" data-i18n="nav.page_layout.main"><?php echo e(__('Site Menus')); ?></span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="<?php echo e(route('admin.menus')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('List Menus')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="<?php echo e(route('admin.menus.add')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('Add New Menu')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
        </ul>
      </li>
      <li class="pcoded-hasmenu"> <a href="javascript:void(0)"> <span class="pcoded-micon"><i class="ti-menu-alt"></i></span> <span class="pcoded-mtext" data-i18n="nav.page_layout.main"><?php echo e(__('Testimonials')); ?></span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="<?php echo e(route('admin.modules.data','testimonials')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('Testimonials')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="<?php echo e(route('admin.modules.data.add','testimonials')); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e(__('Add New Testimonials')); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
        </ul>
      </li>
		  
		<li class=""> <a href="<?php echo e(route('admin.modules.data','contact-us-messages')); ?>"> <span class="pcoded-micon"><i class="ti-email"></i></span> <span class="pcoded-mtext"><?php echo e(__('Contact Us Messages')); ?></span>  <?php if(messages_count()): ?>
                  <span class="badge"><?php echo e(messages_count()); ?></span>
                  <?php endif; ?> </a> </li> 
		  
		  
      <li class="pcoded-hasmenu"> <a href="javascript:void(0)" data-i18n="nav.navigate.main"> <span class="pcoded-micon"><i class="ti-settings"></i></span> <span class="pcoded-mtext"><?php echo e(__('Settings')); ?></span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <?php

          $w_pages = App\Models\WidgetPages::where( 'status', 'active' )->get();

          ?>
          <?php if(null!==($w_pages)): ?>
          
          <?php $__currentLoopData = $w_pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w_p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class=""> <a href="<?php echo e(route('admin.widgets_data',$w_p->slug)); ?>" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext"><?php echo e($w_p->title); ?></span> <span class="pcoded-mcaret"></span> </a> </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
          <?php endif; ?>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<?php /**PATH /Users/pcu/Desktop/Projects/avon_files/resources/views/admin/includes/sidebar.blade.php ENDPATH**/ ?>