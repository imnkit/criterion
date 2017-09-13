<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
 <?php
			$facebook = get_field('facebook','option');
			$twitter = get_field('twitter','option');
			$linkedin = get_field('linkedin','option');
			$youtube = get_field('youtube','option');
			$google = get_field('google','option');
			?>
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
        	<div class="singlie-pg-social">
    <span class="text-share">Share via</span><script type="text/javascript">var switchTo5x=true;</script><script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script><script type="text/javascript">stLight.options({publisher: "73f60972-0dbc-402b-bcd8-e9d6a941618e", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
  <span class='st_facebook_custom facebook' displayText='Facebook'></span><span class='st_twitter_custom twitter' displayText='Tweet'></span><span class='st_linkedin_custom linkedin' displayText='LinkedIn'></span><span class='st_googleplus_custom google' displayText='Google +'></span><!--<span class='st_sharethis_custom share' displayText='ShareThis'></span>-->
        <!--<a href="https://facebook.com/" class="facebook"></a>
    <a href="https://twitter.com/" class="twitter"></a>
    <a href="https://in.linkedin.com/" class="linkedin"></a>
    <a href="https://google.com/" class="google"></a>
    <a href="https://facebook.com/" class="share"></a>-->
    </div>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>
