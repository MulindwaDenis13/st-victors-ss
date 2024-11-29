<header id="header" class="header-section d-flex align-items-center">
    <div class="container-fluid">
        <nav class="navbar"> <a href="{{url('/')}}" class="navbar-brand"> <img class="logo-light responsive-logo "  src="{{asset('images/'.widget(1)->extra_image_1)}}" alt="Apptex"
         style="margin-top:85px;"> <img class="logo-dark responsive-logo " src="{{asset('images/'.widget(1)->extra_image_1)}}" alt="Apptex"> </a>
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

<style>
    /* Default Styling */
    .responsive-logo {
        width: auto;
        height: auto;
        max-height: 150px;
    }

    .logo-dark {
        max-height: 50px;
    }

    /* Media Query for smaller devices */
    @media (max-width: 768px) {
        .responsive-logo {
            max-height: 100px; /* Reduce image size for smaller screens */
        }

        .logo-dark {
            max-height: 40px; /* Adjust dark logo size */
        }
    }

    /* Media Query for very small devices (e.g., phones) */
    @media (max-width: 480px) {
        .responsive-logo {
            max-height: 80px; /* Further reduce size */
        }

        .logo-dark {
            max-height: 30px;
        }
    }
</style>