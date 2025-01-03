<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?> :: Admin</title>

    <link rel="icon" href="<?php echo e(asset('admin/assets/images/favicon.ico')); ?>" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/icon/themify-icons/themify-icons.css')); ?>">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/icon/icofont/css/icofont.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/pages/notification/notification.css')); ?>">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/bower_components/animate.css/animate.css')); ?>">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/style.css')); ?>">
    <!-- color .css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/color/color-1.css')); ?>" id="color"/>
</head>
<body>

<?php echo $__env->yieldContent('content'); ?>

<script type="text/javascript" src="<?php echo e(asset('admin/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('admin/bower_components/jquery-ui/jquery-ui.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('admin/bower_components/tether/dist/js/tether.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?php echo e(asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.js')); ?>"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?php echo e(asset('admin/bower_components/modernizr/modernizr.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('admin/bower_components/modernizr/feature-detects/css-scrollbars.js')); ?>"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="<?php echo e(asset('admin/assets/js/bootstrap-growl.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('admin/assets/pages/notification/notification.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('admin/bower_components/i18next/i18next.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('admin/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('admin/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('admin/bower_components/jquery-i18next/jquery-i18next.min.js')); ?>"></script>
<!-- Custom js -->

<?php echo $__env->yieldPushContent('js'); ?>
</body>
</html>
<?php /**PATH /Users/pcu/Desktop/Projects/victorskitaasa/resources/views/admin/layouts/auth.blade.php ENDPATH**/ ?>