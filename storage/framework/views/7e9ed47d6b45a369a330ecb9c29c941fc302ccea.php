<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      
    <link rel="shortcut icon" href="<?php echo e(asset('images/'.widget(13)->extra_image_1)); ?>">  
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php echo seo (collect(request()->segments())->last()); ?>

	<link rel="stylesheet" href="<?php echo e(asset('css/all.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
	<link href="<?php echo e(asset('css/owl.carousel.css')); ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/slicknav.min.css')); ?>">
	<!-- Rev Slider css -->
	<link rel="stylesheet" href="<?php echo e(asset('js/revolution-slider/css/settings.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
	<script src="<?php echo e(asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('css'); ?>

    <script type="text/javascript">
      var base_url = "<?php echo url('/'); ?>"
    </script>
   </head>
   <body>
   	<?php echo $__env->make('includes.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   	<?php echo $__env->yieldContent('content'); ?>
   	<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   	<!-- jQuery Lib -->
	<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
	<!-- Bootstrap JS -->
	<script src="<?php echo e(asset('js/vendor/bootstrap.bundle.min.js')); ?>"></script>

	<!-- Slicknav JS -->
	<script src="<?php echo e(asset('js/vendor/jquery.slicknav.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/vendor/smooth-scroll.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/vendor/venobox.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/vendor/jquery.magnific-popup.min.js')); ?>"></script>
	<!-- Revolution Slider --> 
	<script type="text/javascript" src="<?php echo e(asset('js/revolution-slider/js/jquery.themepunch.tools.min.js')); ?>"></script> 
	<script type="text/javascript" src="<?php echo e(asset('js/revolution-slider/js/jquery.themepunch.revolution.min.js')); ?>"></script> 
	   
	<!-- Ajaxchimp JS -->
	<script src="<?php echo e(asset('js/vendor/jquery.ajaxchimp.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/counter.js')); ?>"></script>
	<script src="<?php echo e(asset('js/owl.carousel.js')); ?>"></script>
	<script src="<?php echo e(asset('js/main.js')); ?>"></script> 
	<!-- Jquery Fancybox --> 
	<script src="<?php echo e(asset('js/jquery.fancybox.min.js')); ?>"></script> 
	<!-- Animate js --> 
	<script src="<?php echo e(asset('js/animate.js')); ?>"></script> 
	
	<!-- WOW file --> 
	<script src="<?php echo e(asset('js/wow.js')); ?>"></script> 
	<!-- general script file --> 
	<script src="<?php echo e(asset('js/owl.carousel.js')); ?>"></script> 
	<script src="<?php echo e(asset('admin/bower_components/jquery.filer/js/jquery.filer.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/select2.min.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('admin/assets/js/bootstrap-growl.min.js')); ?>"></script>
	<?php echo $__env->yieldPushContent('js'); ?>
   </body>
</html><?php /**PATH /Users/pcu/Desktop/Projects/victorskitaasa/resources/views/layouts/app.blade.php ENDPATH**/ ?>