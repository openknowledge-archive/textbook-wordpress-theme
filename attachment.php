<?php get_header(); ?>
  <div class="container">
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="span7 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
							
							<div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>
							
							<p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">
							
							<?php the_content(); ?>
							
						</section> <!-- end article section -->
						
						<footer>
			
							<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ' ', '</p>'); ?>
							
						<?php if(of_get_option('site_sharing', '1')) {?>
              <ul class="socialcount" data-url="<?php echo get_permalink( $post->ID ); ?>">
                <li class="facebook"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink( $post->ID ); ?>" title="Share on Facebook"><span class="icon icon-facebook"></span><span class="count">Like</span></a></li>
                <li class="twitter"><a href="https://twitter.com/intent/tweet?text=<?php echo get_permalink( $post->ID ); ?>" title="Share on Twitter"><span class="icon icon-twitter"></span><span class="count">Tweet</span></a></li>
                <li class="googleplus"><a href="https://plus.google.com/share?url=<?php echo get_permalink( $post->ID ); ?>" title="Share on Google Plus"><span class="icon icon-googleplus"></span><span class="count">+1</span></a></li>        
              </ul>
              <?php } ?>
          </footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1>Not Found</h1>
					    </header>
					    <section class="post_content">
					    	<p>Sorry, but the requested resource was not found on this site.</p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

  </div> <!-- end #container -->
<?php get_footer(); ?>