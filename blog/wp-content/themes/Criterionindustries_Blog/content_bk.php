<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">
			<!--Index page post thum section start-->           
			<?php if ( !is_single() ) : 
			if( get_the_post_thumbnail( $post_id, 'home-sub-img' ) == '') { ?> <img  src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/331-232.jpg"> <?php } else {
			echo get_the_post_thumbnail( $post_id, 'home-sub-img' ); }
			else : 
			endif; 
			?>
            <!--Index page post thum section end-->
                       
 <!--Post page Header menu section start-->  
 <?php if ( is_single() ) : ?>         
<div class="sing-pg-menu">
 <?php wp_nav_menu( array( 'menu' => 'second-index-menu','menu_class' => 'nav-menu','container'       => '','items_wrap'      => '<ul>%3$s</ul>' ) ); ?>
 </div>
 <?php
 else : 
			endif; 
			?>
 <!--Post page Header menu section end-->           
 <?php if ( is_single() ) : ?>
 <!--Post page Date text start-->
 <div class="dtr"><?php echo get_the_date('jS M Y');?></div>
 <!--Post page Date text end-->
  <?php
 else : 
			endif; 
			?>
            
           
            
            
 
 <!--Post page Comment text start-->
 <?php if ( is_single() ) : ?>
 <div class="comment">
 <?php if ( comments_open() ) : ?>
				<div class="comments-link">
					<?php comments_popup_link( '<span class="leave-reply">' . __( 'Comment', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
				</div><!-- .comments-link -->
			<?php endif; // comments_open() ?>
 
 </div>
   <?php endif; // is_single() ?>
 <!--Post page Comment text end-->
 
  <?php if ( is_single() ) : ?>
 <!--Post page Back button start-->
 <div class="back-button" style="float:right;"><a href="javascript:" onclick="history.go(-1); return false"> Back </a></div>
 <!--Post page Date text end-->
  <?php
 else : 
			endif; 
			?>
 
 
 
<!--Post page slider start-->
			<?php if ( is_single() ) : ?>
            <?php $images = get_field('slider-gallery');
            		if( $images ): ?>
            <div class="slider">
                    <div class="flexslider">
                    
                        <ul class="slides">
                         <?php foreach( $images as $image ): ?>
                            <li>
                                <figure><img src="<?php echo $image['sizes']['inner-page-slider']; ?>" alt="slider"></figure>
                            </li>
                           <?php endforeach; ?>
                        </ul><!--/.slides-->
                    </div><!--/.flexslider-->
                </div>
                	<?php endif; ?>
                <?php endif; // is_single() ?>
<!--Post page slider end-->

			<?php if ( is_single() ) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php else : ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php
$tit = the_title('','',FALSE);
echo substr($tit, 0, 61);
?></a>
			</h1>
             <!--Post page Date text start-->
 <div class="dtr"><?php echo get_the_date('jS M Y');?></div>
 <!--Post page Date text end-->
			<?php endif; // is_single() ?>
			
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
        <?php if ( is_single() ) : ?>
        <!--Middle Content section start-->
      <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
      <!--Middle Content section end-->
      
      <!--Download section start-->
      <?php 
	  $y_video_code = get_field('youtube_video_code', $post->ID);
	  if($y_video_code != '')
		{
			$y_video_code = get_field('youtube_video_code', $post->ID);	
													$image_slider_video = "http://img.youtube.com/vi/".$y_video_code."/sddefault.jpg";
													$image_width = 680;
													$image_height = 300;
													$image_slider_video_src = 'https://www.youtube.com/embed/'.$y_video_code."?autoplay=1";
													$video_type = 'youtubeVideo';
		?>
      <div class="video_box">
                                        <div class="case_study_video list">
                                        
                                            <a  class="various fancybox.iframe" href="<?php echo $image_slider_video_src; ?>" ><img width="100%" height="100%" src="<?php echo get_template_directory_uri(); ?>/images/video-icon.png" ><br /> Check Video</a>

<?php /*?><img width="100%" height="100%" src="<?php echo $image_slider_video; ?>" alt="<?php the_title(); ?>"><?php */?>

                                        </div>
                                    </div>
      <?php
		}
	  ?>
      
     <?php $download_title = get_field('download_title');
	 $download_Brochure = get_field('download_Brochure');
	 if($download_title != '' || $download_Brochure != '' ) {
	  ?>
    <div class="download-section">
    <a href="<?php echo $download_Brochure['url']; ?>" target="_blank" title="<?php echo $download_title; ?>"><img width="100%" height="100%" src="<?php echo get_template_directory_uri(); ?>/images/download-icon.png" ><br /><?php echo $download_title; ?></a>
    </div>
    <?php } ?>
      <!--Download section end-->
     
			<?php else : ?>
            <!--Index page post Content and redmore section start-->           
              <p><?php echo substr(get_the_excerpt(), 0,230); ?></p><a href="<?php the_permalink(); ?>" class="continue-reading">Continue Reading</a>
			<!--Index page post Content and redmore section end-->           
			<?php endif; // is_single() ?>
			
			<?php //wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>
 <?php if ( is_single() ) : ?>
		<footer class="entry-meta">
			<?php twentytwelve_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
				<div class="author-info">
					<div class="author-avatar">
						<?php
						/** This filter is documented in author.php */
						$author_bio_avatar_size = apply_filters( 'twentytwelve_author_bio_avatar_size', 68 );
						echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
						?>
					</div><!-- .author-avatar -->
					<div class="author-description">
						<h2><?php printf( __( 'About %s', 'twentytwelve' ), get_the_author() ); ?></h2>
						<p><?php the_author_meta( 'description' ); ?></p>
						<div class="author-link">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentytwelve' ), get_the_author() ); ?>
							</a>
						</div><!-- .author-link	-->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			<?php endif; ?>
		</footer><!-- .entry-meta -->
        	<?php endif; ?>
        <?php comments_template( '', true ); ?>
        
         <?php if ( is_single()  ) : ?>
         <nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
					<span class="nav-previous" title="Previous Post"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', '', 'twentytwelve' ) . '</span> ' ); ?></span>
					<span class="nav-next" title="Next Post"><?php next_post_link( '%link', '<span class="meta-nav">' . _x( '', '', 'twentytwelve' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->
                <?php endif; ?>
                
  <?php if ( is_single() ) : ?>       
        <?php 
$posts = get_field('select_releted_post');
if( $posts ): ?>
<div class="service-section">
  <div class="container">
    <h2>Releted Posts</h2>
    <div id="service-slider">

    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
         <div class="item">
        <div class="item-inner">
        
         <div class="owl-image"> <?php echo get_the_post_thumbnail( $post_id,  array( 215, 152) ); ?></div>
       
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
       
</div>
</div>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
     </div>
  </div>
</div>  
<?php endif; ?>
<?php endif; ?>
	</article><!-- #post -->


</script>