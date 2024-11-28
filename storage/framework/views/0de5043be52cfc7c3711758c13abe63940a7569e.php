<footer>
  <div class="container">
	  <ul class="footer-adress row">
		  <li class="col-md-4">
			  <div class="ftadress">
			  
			  <i class="fas fa-map-signs"></i><strong><?php echo e(__('Address')); ?></strong> <span><?php echo e(widget(1)->extra_field_4); ?></span>
			</div>
		  </li>
		  <li class="col-md-4">
			  <div class="ftadress">
				
			  <i class="fas fa-envelope" aria-hidden="true"></i><strong><?php echo e(__('Email')); ?></strong> <span><a href="mailto:<?php echo e(widget(1)->extra_field_3); ?>"> <?php echo e(widget(1)->extra_field_3); ?></a></span>
			  </div>
		  </li>
		  <li class="col-md-4">
			  <div class="ftadress">
			  
			  <i class="fas fa-phone-alt"></i><strong><?php echo e(__('Phone')); ?></strong> <span><a href="tel:<?php echo e(widget(1)->extra_field_2); ?>"><?php echo e(widget(1)->extra_field_2); ?></a></span>
			  </div>
		  </li>
	  </ul>
	  
	  <div class="logo-footer"> <img src="<?php echo e(asset('images/'.widget(1)->extra_image_1)); ?>" height="150px" width="150px"/> </div>
              
	  
	  <div class="footer-list justify-content-between d-flex">
                  <ul class="w-100">
                      <?php echo get_menus(2); ?>

                  </ul>
              </div>
	  <div class="social_icons_footer">
                  <ul>
                      <li><a href="<?php echo e(widget(12)->extra_field_1); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="<?php echo e(widget(12)->extra_field_2); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="<?php echo e(widget(12)->extra_field_3); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="<?php echo e(widget(12)->extra_field_4); ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                  </ul>
              </div>
	  
     
      <div class="copyright">
          <p class="text-center"><?php echo e(__('Copyright')); ?> © <?php echo e(date("Y")); ?>. <?php echo e(widget(1)->extra_field_1); ?>. <?php echo e(__('All Rights Reserved')); ?>. Designed @ DenTechGroup +25670857117 OR +256773002475</p>
      </div>
  </div>
</footer>
<a data-scroll href="#header" id="scroll-to-top"><i class="fas fa-long-arrow-alt-up"></i></a>
<?php /**PATH /Users/pcu/Desktop/Projects/avon_files/resources/views/includes/footer.blade.php ENDPATH**/ ?>