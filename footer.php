			<footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix container">
          <div id="widget-footer" class="clearfix row">
          
            <?php
						if ( is_active_sidebar('footer2') ) { ?>
							<div class="span8">
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
                <?php endif; ?>
              </div>
              <div class="span8">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
                <?php endif; ?>
              </div>
						<? } else { ?>
							<div class="span16">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
                <?php endif; ?>
              </div>
						<? };
						?>
          </div>
					
					<nav class="clearfix">
						<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
			
					<div class="attribution">
            <? if (of_get_option('footer_text')) : ?>
						  <?php echo of_get_option('footer_text'); ?>
						<? else :?>
								<p>&copy; <?php bloginfo('name')?> </p>
					  <? endif; ?>
				  </div>
          
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
		
    <?php if(of_get_option('site_sharing', '1')) {?>
    <!-- SocialCount -->
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/socialcount.js"></script>
    <?php } ?>
    
	</body>

</html>