</html>  
<?php wp_footer(); ?>

<footer class="footer">
	<div class="footer_wrapper">
		
				<div id="link-box1" class="col-md-2 col-xs-6">
					<?php if(is_active_sidebar('footer1')){
					dynamic_sidebar('footer1');
					}
					?>
				</div>	

				<div id="link-box2" class="col-md-2 col-xs-6">
					<?php if(is_active_sidebar('footer2')){
					dynamic_sidebar('footer2');	
					}
					?>
				</div>

				<div id="link-box3" class="col-md-2 col-xs-6">
					<?php if(is_active_sidebar('footer3')){
					dynamic_sidebar('footer3');	
					}
					?>
				</div>

				<div id="link-box4" class="col-md-2 col-xs-6">
					<?php if(is_active_sidebar('footer4')){
					dynamic_sidebar('footer4');	
					}
					?>
					<p id="custom-text">419-1672v(800)</p>
				</div>

				<div id="mail-submit" class="col-md-3 col-xs-6">
					<h3>SIGN UP FOR NEWSLATTER</h3>
					<form>
						<button id="mail-sender"></button>
						<input type="text" id="email" placeholder="Email address"></input>
					</form>
				</div>
			
			<div class="copy_logo  col-xs-6">
				<div id="footer-logo">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.png">
				</div>
				<div id="footer-copy">
					&copy; 2016 All rights reserved
				</div>
				<div id="social-links">
					<ul>
						<li><a href="" id="facebook"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/facebook.png"></a></li>
						<li><a href="" id="youtube"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/youtube.png"></a></li>
						<li><a href="" id="google"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/google.png"></a></li>
					</ul>
				</div>
			</div>
	</div>	
</footer> 
                   
                 