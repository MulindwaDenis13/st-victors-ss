<nav class="pcoded-navbar" pcoded-header-position="relative">
  <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
  <div class="pcoded-inner-navbar main-menu">
    <div class="">
    
		
		
      <div class="main-menu-content">
        <ul>
          <li class="more-details"> <a href="#!"><i class="ti-layout-sidebar-left"></i>{{__('Logout')}}</a> </li>
        </ul>
      </div>
    </div>

	  <ul class="pcoded-item pcoded-left-item">
      <li class=" "> <a href="{{url('/admin/home')}}" data-i18n="nav.form-wizard.main"> <span class="pcoded-micon"><i class="ti-home"></i></span> <span class="pcoded-mtext">{{__('Dashboard')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
      <li class="pcoded-hasmenu"> <a href="javascript:void(0)" data-i18n="nav.navigate.main"> <span class="pcoded-micon"><i class="ti-user"></i></span> <span class="pcoded-mtext">{{__('Admins')}}</span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="{{route('admin.admins')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('List Admins')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="{{route('admin.admin.add')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('Add New Admin')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
        </ul>
      </li>
	<li class="pcoded-hasmenu">
            <a href="javascript:void(0)" data-i18n="nav.navigate.main">
            <span class="pcoded-micon"><i class="ti-layout-slider"></i></span>
            <span class="pcoded-mtext">{{__('Slider')}}</span>
            <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
               <li class=" ">
                  <a href="{{route('admin.modules.data','slider')}}" data-i18n="nav.navigate.navbar">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext">{{__('List Slide Images')}}</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>

               <li class=" ">
                  <a href="{{route('admin.modules.data.add','slider')}}" data-i18n="nav.navigate.navbar">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext">{{__('Add New Slide Image')}}</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
            </ul>
         </li>
		
      <li class="pcoded-hasmenu"> <a href="javascript:void(0)" data-i18n="nav.navigate.main"> <span class="pcoded-micon"><i class="ti-list"></i></span> <span class="pcoded-mtext">{{__('Services')}}</span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="{{route('admin.modules.data','services')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('List Services')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="{{route('admin.modules.data.add','services')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('Add New Service')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
        </ul>
      </li>

      <li class="pcoded-hasmenu"> <a href="javascript:void(0)" data-i18n="nav.navigate.main"> <span class="pcoded-micon"><i class="ti-list"></i></span> <span class="pcoded-mtext">{{__('Industries')}}</span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="{{route('admin.modules.data','industries')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('List Industries')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="{{route('admin.modules.data.add','industries')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('Add New Industry')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
        </ul>
      </li>

      <li class="pcoded-hasmenu"> <a href="javascript:void(0)" data-i18n="nav.navigate.main"> <span class="pcoded-micon"><i class="ti-list"></i></span> <span class="pcoded-mtext">{{__('Technologies')}}</span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="{{route('admin.modules.data','technologies')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('List Technologies')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="{{route('admin.modules.data.add','technologies')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('Add New Technology')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
        </ul>
      </li>


      <li class="pcoded-hasmenu"> <a href="javascript:void(0)"> <span class="pcoded-micon"><i class="ti-files"></i></span> <span class="pcoded-mtext" data-i18n="nav.page_layout.main">{{__('Site Pages')}}</span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="{{route('admin.modules.data','cms-pages')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('List Site Pages')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="{{route('admin.modules.data.add','cms-pages')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('Add New Page')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
        </ul>
      </li>
		  
		 
		  
      <li class="pcoded-hasmenu"> <a href="javascript:void(0)" data-i18n="nav.navigate.main"> <span class="pcoded-micon"><i class="ti-view-grid"></i></span> <span class="pcoded-mtext">{{__('FAQs')}}</span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="{{route('admin.modules.data','faqs')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('List FAQs')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="{{route('admin.modules.data.add','faqs')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('Add New FAQ')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
        </ul>
      </li>
      <li class="pcoded-hasmenu"> <a href="javascript:void(0)" data-i18n="nav.navigate.main"> <span class="pcoded-micon"><i class="ti-gallery"></i></span> <span class="pcoded-mtext">{{__('Portfolio')}}</span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="{{route('admin.modules.data','portfolio')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('List Portfolio')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="{{route('admin.modules.data.add','portfolio')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('Add New Portfolio')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
			
		<li class=""><a href="{{route('admin.modules.data','work-categories')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('Portfolio Categories')}}</span> <span class="pcoded-mcaret"></span> </a></li>
		<li class=""><a href="{{route('admin.modules.data.add','work-categories')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('Add Category')}}</span> <span class="pcoded-mcaret"></span> </a></li>
			
        </ul>
      </li>
      <li class="pcoded-hasmenu"> <a href="javascript:void(0)" data-i18n="nav.navigate.main"> <span class="pcoded-micon"><i class="ti-cloud-up"></i></span> <span class="pcoded-mtext">{{__('Payments')}}</span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="{{route('admin.modules.data','payments')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('List Payments')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="{{route('admin.modules.data.add','payments')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('Add New Payment')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
        </ul>
      </li>
      <li class="pcoded-hasmenu"> <a href="javascript:void(0)" data-i18n="nav.navigate.main"> <span class="pcoded-micon"><i class="ti-layout-cta-right"></i></span> <span class="pcoded-mtext">{{__('Blogs')}}</span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="{{route('admin.modules.data','blogs')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('List Blogs')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="{{route('admin.modules.data.add','blogs')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('Add New Blog')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="{{route('admin.modules.data','blog-categories')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('Blog Categories')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="{{route('admin.modules.data.add','blog-categories')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('Add Blog Category')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
        </ul>
      </li>
      
      
      <li class="pcoded-hasmenu"> <a href="javascript:void(0)"> <span class="pcoded-micon"><i class="ti-direction-alt"></i></span> <span class="pcoded-mtext" data-i18n="nav.page_layout.main">{{__('Site Menus')}}</span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="{{route('admin.menus')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('List Menus')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="{{route('admin.menus.add')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('Add New Menu')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
        </ul>
      </li>
      <li class="pcoded-hasmenu"> <a href="javascript:void(0)"> <span class="pcoded-micon"><i class="ti-menu-alt"></i></span> <span class="pcoded-mtext" data-i18n="nav.page_layout.main">{{__('Testimonials')}}</span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <li class=" "> <a href="{{route('admin.modules.data','testimonials')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('Testimonials')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
          <li class=" "> <a href="{{route('admin.modules.data.add','testimonials')}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{__('Add New Testimonials')}}</span> <span class="pcoded-mcaret"></span> </a> </li>
        </ul>
      </li>
		  
		<li class=""> <a href="{{route('admin.modules.data','contact-us-messages')}}"> <span class="pcoded-micon"><i class="ti-email"></i></span> <span class="pcoded-mtext">{{__('Contact Us Messages')}}</span>  @if(messages_count())
                  <span class="badge">{{messages_count()}}</span>
                  @endif </a> </li> 
		  
		  
      <li class="pcoded-hasmenu"> <a href="javascript:void(0)" data-i18n="nav.navigate.main"> <span class="pcoded-micon"><i class="ti-settings"></i></span> <span class="pcoded-mtext">{{__('Settings')}}</span> <span class="pcoded-mcaret"></span> </a>
        <ul class="pcoded-submenu">
          <?php

          $w_pages = App\Models\WidgetPages::where( 'status', 'active' )->get();

          ?>
          @if(null!==($w_pages))
          
          @foreach($w_pages as $w_p)
          <li class=""> <a href="{{route('admin.widgets_data',$w_p->slug)}}" data-i18n="nav.navigate.navbar"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">{{$w_p->title}}</span> <span class="pcoded-mcaret"></span> </a> </li>
          @endforeach
          
          @endif
        </ul>
      </li>
    </ul>
  </div>
</nav>
