<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/singlepage.css">

	<div id="primary" class="site-content left-side1">
		<div id="content" role="main" class="container">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

				

				
                
               
                
                
<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>            


			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
    
    
       
    

<?php get_sidebar(); ?>



<?php get_footer(); ?>
