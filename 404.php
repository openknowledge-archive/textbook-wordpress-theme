<?php get_header(); ?>
  <div class="container">
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="span16 clearfix" role="main">

					<article id="post-not-found" class="clearfix">
						
						<header>

							<div class="hero-unit">
							
								<h1>Epic 404 - Article Not Found</h1>
								<p>This is embarassing. We can't find what you were looking for.</p>
															
							</div>
													
						</header> <!-- end article header -->
					
						<section class="post_content">
							
							<p>Whatever you were looking for was not found, but maybe try looking again or search using the form below.</p>

							<div class="row">
								<div class="span16">
									<?php get_search_form(); ?>
								</div>
							</div>
					
						</section> <!-- end article section -->
						
						<footer>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->

  </div> <!-- end #container -->
<?php get_footer(); ?>