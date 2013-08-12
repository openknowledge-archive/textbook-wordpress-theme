<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
  <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
													
			<div class="banner">
 				<div class="container">
          <?php 
						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail('wpbs-featured-home');
						}
						else {
						  echo get_post_meta($post->ID, 'custom_tagline' , true);
						}
					?>

				</div>
			</div>
      
      <div class="container">
        <div id="content" class="clearfix row">
        
          <div id="main" class="span16 clearfix" role="main">
						<section class="row post_content">
						
							<div class="span10">
								<h1><?php the_title(); ?></h1>
								<?php the_content(); ?>
							</div>
							
							<?php get_sidebar('sidebar2'); // sidebar 2 ?>
													
						</section> <!-- end article header -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php 
						// No comments on homepage
						//comments_template();
					?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
      </div> <!-- end #content -->
    </div> <!-- end #container -->
    <section class="blog-latest">
      <div class="container">

				<?php
				if (of_get_option('number_posts')) {
					$poststoshow = 'numberposts='.of_get_option('number_posts');
				}
				else {
				  $poststoshow = 'numberposts=1';
				}
				
			  $postslist = get_posts($poststoshow);
			  foreach ($postslist as $post) :
				  setup_postdata($post);
			  ?>
         
        <?php 
        if (wp_get_attachment_url( get_post_thumbnail_id($post->ID) )) {
          $imgurl = $imgurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        }
        else {
          $imgurl = get_template_directory_uri().'/images/thumb.png';
        }
        ?>
        <div class="row">
				  <div class="span6 thumb">
            <a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo $imgurl ?>)"></a>
          </div>
          <div class="span10">
            <h2><?php the_title(); ?></h2>
            <div class="excerpt">
              <?php the_excerpt() ?>
            </div>
            <a class="btn btn-primary btn-large" href="<?php the_permalink(); ?>">More</a>
          </div>
        </div>
        <?php endforeach ?>
      
      </div> <!-- end #container -->     
   </section>
<?php //get_sidebar(); // sidebar 1 ?>
<?php get_footer(); ?>
