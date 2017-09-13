<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->

	<!-- #colophon -->
</div><!-- #page -->
 <?php
			$facebook = get_field('facebook','option');
			$twitter = get_field('twitter','option');
			$linkedin = get_field('linkdin','option');
			$youtube = get_field('youtube','option');
			$google = get_field('google','option');
			?>
 </div>
 <div class="socialbar">
	<div class="main">
	<ul class="social_icon">
		<li><a class="facebook" title="facebook" target="_blank" href="<?php echo $facebook; ?>">facebook</a></li>
	    <li><a class="twitter" title="twitter" target="_blank" href="<?php echo $twitter; ?>">twitter</a></li>
	    <li><a class="linkedin" title="linkedin" target="_blank" href="<?php echo $linkedin; ?>">linkedin</a></li>
		<li><a class="googleplus" title="googleplus" target="_blank" href="<?php echo $google; ?>">googleplus</a></li>
	    <!-- <li><a href="#" target="_blank" title="pinterest" class="pinterest">pinterest</a></li> -->
		<li><a class="youtube" title="youtube" target="_blank" href="<?php echo $youtube; ?>">youtube</a></li>
        <li><a class="pinterest" title="pinterest" target="_blank" href="https://www.pinterest.com/CriterionInd">pinterest</a></li>
        <li><a class="instagram" title="instagram" target="_blank" href="https://instagram.com/criterion_industries">instagram</a></li>
	</ul><!--/.social_icon-->
	</div>
</div>
 <div class="footer_wrape">

 <style>
 #menu-footer-menu-one > li > a {
    background: url("../images/footer-seprator.png") no-repeat scroll right 4px rgba(0, 0, 0, 0);


    padding: 0 10px 0 0;

 }
 </style>
  <div class="main">
    <!-- footer quick link pad start -->
    <div class="cf">
    	<div class="quick_link">
    	<div class="quick_link_inner">
        <?php /* Widgetized sidebar */
   wp_nav_menu( array( 'menu' => 'footer-menu-one', 'menu_class' => 'cf','container' => '' ) ); ?>
      		<!--<ul class="cf">
        <li><a title="Home" href="javascript:;">Home</a></li>
        <li>|</li>
        <li><a title="About Us" href="javascript:;">About Us</a></li>
        <li>|</li>
        <li><a title="Products" href="javascript:;">Products</a></li>
        <li>|</li>
        <li><a title="Architects’ Lounge" href="javascript:;">Architects’ Lounge</a></li>
        <li> |</li>
        <li><a title="Resources" href="javascript:;">Resources</a></li>
        <li>|</li>
        <li><a title="Rewards Cabinet" href="javascript:;">Rewards Cabinet</a></li>
        <li> |</li>
        <li><a title="Contact Us" href="javascript:;">Contact Us</a></li>
      </ul>-->
      		<div class="copyright_pad">
        <div class="copy">
        	<div class="copyright-section top">
	          <p><?php the_field('copy_right_text','option'); ?></p>
          	</div>
             <?php /* Widgetized sidebar */
   wp_nav_menu( array( 'menu' => 'footer-menu-two', 'menu_class' => 'cf','container' => '' ) ); ?>
          <?php /*?><ul class="cf">
            <li><a title="Privacy Policy" href="javascript:;">Privacy Policy</a></li>
            <li>|</li>
            <li><a title="Terms &amp; Conditions" href="javascript:;">Terms &amp; Conditions</a></li>
            <li>|</li>
            <li><a title="delivery &amp; returns" href="javascript:;">Delivery &amp; Returns </a></li>
            <li>|</li>
            <li><a title="FAQ" href="javascript:;">FAQ</a></li>
            <li>|</li>
            <li><span>ABN: <?php the_field('abn','option'); ?></span></li>
          </ul><?php */?>
          <div class="abn"><span>ABN: <?php the_field('abn','option'); ?></span></div>
        </div>
      </div>
      </div>
    </div>

<div class="join">

	<div class="newslettermiddle">

    <form class="newsletter-validate-detail" id="newsletter-validate-footer" method="post" action="/newsletter/subscriber/new/">
        <p> Join Our Newsletter Today</p>
           <div class="cf newsletter-inputs-outer"><input type="text" class="input required-entry validate-email" title="Join Our Newsletter Today" id="newsletter" name="email">
            <button class="go_btn fl" title="Go" type="submit">Go</button>
            </div>
      	<span class="bottom-arrow"></span>
    </form>
 </div>
 </div>







    	<div class="call_now">
     <p style="color: #B9B9B9; font-family: 'OpenSansBold'; font-size: 13px; text-transform:uppercase; margin-bottom: 10px;"> Call us now!</p>
      <p> <span>VIC</span><?php the_field('vic','option'); ?></p>
      <p> <span>NSW</span><?php the_field('nsw','option'); ?></p>
      <p> <span>WA</span><?php the_field('wa','option'); ?></p>
    </div>
    </div>
    <!-- footer call now pad end -->
  </div>
  <!-- footer copyright 1 pad start -->
  <div style="display:none;" class="copyright_pad_1">
    <div class="copy">
      <p> &copy; 2013 Criterion Industries - All rights reserved</p>

      <ul>
        <li class="tablet_3_none">|</li>
        <li><a target="_blank" title="Privacy Policy" href="/privacy-policy-cookie-restriction-mode/">Privacy Policy</a></li>
        <li class="tablet_3_none">|</li>
        <li><a target="_blank" title="Terms &amp; Conditions" href="/terms_conditions/">Terms &amp; Conditions </a></li>
      </ul>
    </div>
  </div>
  <!-- footer copyright 1 pad end -->

  </div>
<ul class="left_fixed_panel">
<li class="call_back_btn"><a title="Request an immediate call back" href="/quickrfq/index/">Request an immediate call back</a></li>
<li class="contact_us_btn"><a title="Contact us" href="/contactus/">Contact us</a></li>
<li class="shop_online_btn"><a title="Shop online" href="/shop_online/">Shop online</a></li>

</ul>
<?php wp_footer(); ?>


 <script type="text/javascript">
		jq11(document).ready( function(e) {
			//flexslider


		});
	</script>



    <!-- responsive menu css and jquery start -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/menu/meanmenu.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.css" type="text/css"  />


	<script defer="defer" id="generaljs" type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/general.js" rel="<?php echo get_template_directory_uri(); ?>"></script>




<script type='text/javascript'>
(function () {
var done = false;
var script = document.createElement('script');
script.async = true;
script.type = 'text/javascript';
script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) {
if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
var w = new PCWidget({ c: '089d54be-6115-4002-8585-00d2bf10a445', f: true }); done = true;
}
};
})();
</script>

<script>
jQuery(document).ready(function() {
	jQuery("#author").attr("placeholder", "Name *");
	jQuery("#email").attr("placeholder", "Email *");
	jQuery("#comment").attr("placeholder", "Comment *");
	jQuery("#url").attr("placeholder", "Website");
	/* var max=0;
	jQuery("article").each(function(){

	  currentheight=jQuery(this).height();
	  if(currentheight > max)
	  {
		max=currentheight ;
	  }
	});
	console.log(max);
	jQuery(".type-post").css({"height":max+30});
		 */
		 });
	</script>

    <script type="text/javascript">
  function validateForm() {
    var x = document.forms["sform"]["s"].value;
    if (x==null || x=="") {
        //alert("First name must be filled out");
        return false;
    }
	}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
   jQuery(document).ready(function() {
    var hash = window.location.hash;
    if (window.location.hash === "#video") {
        jQuery("#video").fancybox().trigger('click');
    }
});
</script>
</body>
</html>
