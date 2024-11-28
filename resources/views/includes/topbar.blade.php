<header id="header" class="header-section d-flex align-items-center">
    <div class="container-fluid">
        <nav class="navbar"> <a href="{{url('/')}}" class="navbar-brand"> <img class="logo-light" src="{{asset('images/'.widget(1)->extra_image_1)}}" alt="Apptex" height="150px" width="150px"
         style="margin-top:85px;"> <img class="logo-dark" src="{{asset('images/'.widget(1)->extra_image_1)}}" alt="Apptex" height="50px" width="50px"> </a>
            <div class="d-flex menu-wrap align-items-center">
                <div id="navmenu" class="mainmenu">
        
                    <ul class="nav">
                       {!!get_menus(1)!!}
                    </ul>
                </div>
            </div>
            <div class="contact-menu"> <span class="icon"><i class="fas fa-phone-alt"></i></span>
                <div class="contact-number"> <span>{{__('Call Us Today')}}</span> <span><a class="phone" href="tel:{{widget(1)->extra_field_2}}">{{widget(1)->extra_field_2}}</a></span> </div>
            </div>
        </nav>
    </div>
</header>