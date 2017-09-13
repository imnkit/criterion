<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); 



global $post;

// load all 'category' terms for the post
$terms = get_the_terms($post->ID, 'category');

// we will use the first term to load ACF data from
if( !empty($terms) )
{
	$term = array_pop($terms);
 $caturl = get_field('category_header_image', $term);
	if($caturl != '') { 
	
?>
<div class="catbanner">
<img src="<?php echo $caturl['sizes']['cate_banner']; ?>" />
</div>
<?php
	}
	// do something with $custom_field
}





 /*?>// load all 'category' terms for the post
$terms = get_the_terms($post->ID, 'category');

// we will use the first term to load ACF data from
if( !empty($terms) )
{
	echo $caturl = get_field('category_header_image', $term);
	if($caturl != '') { 
	?>
    <div class="catbanner">
<img src="<?php echo $caturl['sizes']['cate_banner']; ?>" />
</div>
    <?php
	}
	// do something with $custom_field
}

<?php */?>



	<section id="primary" class="site-content">
    <div class="title_part">
    <div class="titlep_lft cat-title-menu">
  <?php wp_nav_menu( array( 'menu' => 'second-index-menu','menu_class' => 'nav-menu','container'       => '','items_wrap'      => '<ul>%3$s</ul>' ) ); ?>
    </div>
    </div>   
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>
			<?php /* ?><header class="">
				<h1 class="archive-title"><?php printf( __( 'Category: %s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>

			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</header><!-- .archive-header --><?php  */?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			endwhile;

			//twentytwelve_content_nav( 'nav-below' );
			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
        <?php if(function_exists('wp_paginate')) {
wp_paginate();
} ?>
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>