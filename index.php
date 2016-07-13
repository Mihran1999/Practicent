<?php get_header(); ?>

<body>

	<div class="controller">

	    <section id="page_start" class="col-md-12">

		    <header class="header">	

		    	<div class="logo">
		    		<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_bloginfo('template_directory');?> /images/logo.png"></a>
		    	</div>
		        			        	
		    	<div class="header_menu">
		    		<?php wp_nav_menu(); ?>
		    	</div>	

		    	<div class="mobile_menu">

		    		<div id="button" class="animateing">
		    			<div id="line" class="first"></div>
		    			<div id="line" class="invisible_line"></div>
		    			<div id="line" class="second"></div>
		    			<div id="line" class="third"></div>
		    		</div>

		    		<div class="header_menu_responsive">
		    			<a href="" id="sign-in" class="for_mobile">Sign in</a>
		    			<?php wp_nav_menu(); ?>
		    		</div>

		    	</div>	

				<a href="" id="sign-in">Sign in</a>	

	        </header>

	        <div class="header_content">  
			    <?php $start = new WP_Query(array('post_type' => 'start'));  ?>    
	                   
	                    <?php if($start->have_posts() ) : ?> 

	                    <?php while ($start->have_posts() ) : $start->the_post(); ?>
	                        
	                        <!-- Start Post -->

	                            <span><?php the_title(); ?></span>

	                            <?php the_content(); ?>


	                        <!-- End Post -->   

	                    <?php endwhile; ?>

	                    <?php else: ?>

	                    <?php endif; ?> 
	        </div>            

	        <div id="img-center" class="fadeIn">

	        	<span id="smart-object">
	        		<img src="<?php echo get_bloginfo('template_directory'); ?> /images/smart-object.png">
	        	</span>
	        	<img src="<?php echo get_bloginfo('template_directory'); ?> /images/laptop.png">

	        </div>	

	        <div id="clear"></div>

		</section>    

		<section id="form" class="col-md-12">
				
				<?php $form = new WP_Query(array('post_type' => 'form'));  ?>    
	                   
	                <?php if($form->have_posts() ) : ?> 

	                <?php while ($form->have_posts() ) : $form->the_post(); ?>
	                        
	                    <!-- Start Post -->

	                        <span><?php the_title(); ?></span>

	                    <!-- End Post -->   

	                <?php endwhile; ?>

	                <?php else: ?>

	                <?php endif; ?>

	                <form>
	                	<ul>

	                		<li>
	                			<input type="text" id="first-name" placeholder="First name*"></input>
	                			<input type="text" id="phone-number" placeholder="Phone number*"></input>
	                		</li>
	                			
	                		<li>
	                			<input type="text" id="email" placeholder="Email*"></input>
	                			<input type="text" id="password" placeholder="Password*"></input>
	                		</li>
	                			
	                	</ul>	
	                	<button id="start-trial" class="btn btn-primary">Start Trial</button>
	                	<?php the_content(); ?>
	                </form>

		</section>

		<section id="lorem" class="col-md-12">

			<?php $lorem = new WP_Query(array('post_type' => 'lorem'));  ?>    
	                   
	                <?php if($lorem->have_posts() ) : ?> 

	                <?php while ($lorem->have_posts() ) : $lorem->the_post(); ?>
	                        
	                    <!-- Start Post -->

	                        <span><?php the_title(); ?></span>
	                        <?php the_content(); ?>

	                    <!-- End Post -->   

	                <?php endwhile; ?>

	                <?php else: ?>

	                <?php endif; ?>

		</section>

		<section id="services" class="col-md-12">
		<div class="wrapper_services">
			<ul class="container_li">
				<?php $services = new WP_Query(array('post_type' => 'services'));  ?>    
	       	            
	            	<?php if($services->have_posts() ) : ?> 

	            	<?php while ($services->have_posts() ) : $services->the_post(); ?>
	                        
	                

	                    <li>
	                    	<div class="service_box" id="box">
	                    		<div id="service-smart-object">
									<img src="<?php echo get_bloginfo('template_directory'); ?> /images/smart-object.png">
								</div>
	                    		<?php the_post_thumbnail(); ?>
	                    		<div id="description">
	                    			<span>
	                    				<?php the_title(); ?>
	                    			</span>
	                    			<?php the_content(); ?>
	                    		</div>	
	                    	</div>
	                    </li>

	                  

	            <?php endwhile; ?>

	            <?php else: ?>

	            <?php endif; ?>
	    	</ul>        
	    	<div class="button_container">
	    		<button id="more-moduls" class="btn btn-primary">More moduls <i class="fa fa-angle-right"></i></button>
	    	</div>
	    </div>
		</section>

		<section id="sponsors" class="col-md-12">

			<div class="sponsor_company">
				<span>Join our clients</span>
				<ul>
					<?php $sponsors = new WP_Query(array('post_type' => 'sponsors'));  ?>    
	                   
	            		<?php if($sponsors->have_posts() ) : ?> 

	            		<?php while ($sponsors->have_posts() ) : $sponsors->the_post(); ?>
	           				<li>	
	                    		<?php the_post_thumbnail(); ?>
	                  		</li>
	            		<?php endwhile; ?>

	            		<?php else: ?>

	            		<?php endif; ?>
	            </ul>		
	        </div>    		

		</section>

		<section id="users" class="col-md-12">
			<div id="title">
				<span>Happy users in USA and over 100k around the world  Anyone whose business depends on an appointment calendar</span>
			</div>
				<div class="user_box">
					<ul>
						<?php $users = new WP_Query(array('post_type' => 'users'));  ?>    
	            	       
	            				<?php if($users->have_posts() ) : ?> 

	            				<?php while ($users->have_posts() ) : $users->the_post(); ?>
	            					<li>
	            						<div class="author_box">
	           								<div id="words">	
	                    						<?php the_title(); ?>	                    		
	                  						</div>
	                  						<div id="arrow-bottom"></div>
	                  						<div id="author">
	                  							<?php the_post_thumbnail(); ?>
	                  							<div id="about-author">
	                  								<?php the_content(); ?>
	                  							</div>
	                  						</div>
	                  					</div>	
	                  				</li>	
	            				<?php endwhile; ?>

	            				<?php else: ?>

	            				<?php endif; ?>	
	            	</ul>
	            </div>				
		</section>

		<?php get_footer(); ?> 

	</div>

</body>
