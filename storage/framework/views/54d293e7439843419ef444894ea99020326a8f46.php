<header id="header" class="header-section d-flex align-items-center">
    <div class="container-fluid">
        <nav class="navbar"> <a href="<?php echo e(url('/')); ?>" class="navbar-brand"> <img class="logo-light responsive-logo "  src="<?php echo e(asset('images/'.widget(1)->extra_image_1)); ?>" alt="Apptex"
         style="margin-top:85px;"> <img class="logo-dark responsive-logo " src="<?php echo e(asset('images/'.widget(1)->extra_image_1)); ?>" alt="Apptex"> </a>
            <div class="d-flex menu-wrap align-items-center">
                <div id="navmenu" class="mainmenu">
        
                    <ul class="nav">
                       <?php echo get_menus(1); ?>

                    </ul>
                </div>
            </div>
            <div class="contact-menu"> <span class="icon"><i class="fas fa-phone-alt"></i></span>
                <div class="contact-number"> <span><?php echo e(__('Call Us Today')); ?></span> <span><a class="phone" href="tel:<?php echo e(widget(1)->extra_field_2); ?>"><?php echo e(widget(1)->extra_field_2); ?></a></span> </div>
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
            display: none; /* Hide logo-light and logo-dark on small screens */
        }
    }
</style><?php /**PATH /Users/pcu/Desktop/Projects/victorskitaasa/resources/views/includes/topbar.blade.php ENDPATH**/ ?>