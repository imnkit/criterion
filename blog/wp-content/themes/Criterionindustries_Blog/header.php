<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon"/>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link href="<?php echo get_template_directory_uri(); ?>/css/stylesheet.css?tp=1" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	ga('create', 'UA-40554395-1', 'www.criterionindustries.com.au');
	ga('set', 'anonymizeIp', false);
	ga('send', 'pageview');
</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-T7MK64"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T7MK64');</script>
<!-- End Google Tag Manager -->

<!-- header wrapper pad start -->
<div class="header-wrape">
	<div class="main">
    	<a href="http://www.criterionindustries.com.au/" title="Criterian Industries" class="logo">
        	<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Criterian Industries Logo">
        </a>
        
        <div class="right-side">
        	<div class="black-strip">
            	<ul>
                	<li><div class="search">
                    <form action="<?php echo $url = home_url(); ?>" class="searchform" id="searchform" method="get" name="sform" onsubmit="return validateForm()" role="search">
				<div>
					
					<input type="text" id="s" name="s" class="input" value="">
					<input type="submit" value="" id="searchsubmit" class="btn">
				</div>
			</form>
                        
                    </div></li>
                    <li><a href="https://app.smartsheet.com/b/form?EQBCT=23d396d5343e4bccb2d3f0d702c08934" title="" class="feedback">Feedback</a></li>
                    <li><div class="link">
                        <a href="http://www.criterionindustries.com.au/customer/account/login/" title="Shop Online">Shop Online</a><!--or<a href="http://www.criterionindustries.com.au/customer/account/login/" title="">Register</a>-->
                    </div></li>
                    <li><a href="http://www.criterionindustries.com.au/shop_online/" title="" class="cart"></a></li>
                    <li><a href="tel:1300 754 337" title="" class="call">1300 754 337</a></li>
                </ul>
            </div>
            
            <div class="clear"></div>
            
            <!-- menu wrapper start -->
            <div class="menu2">
                <div style="position:relative; z-index:9999;">
                    <div class="nav" >
                    <?php wp_nav_menu( array( 'theme_location' => 'primary','walker' => new My_Walker_Nav_Menu() ) ); ?>
                       <!-- <ul>
                            <li><a href="http://www.criterionindustries.com.au/" title="Home" class="active">Home</a></li>
                            <li><a href="http://www.criterionindustries.com.au/products.html" title="Products">Products</a></li>
                            <li><a href="http://www.criterionindustries.com.au/architects_lounge/" title="Architects’ Lounge">Architects’ Lounge</a></li>
                            <li> <a href="http://www.criterionindustries.com.au/resources/" title="Resources" >Resources</a>
                                <ul class="second_level">
                                    <li><a href="javascript:;" title="Second Level Link">Second Level Link</a></li>
                                    <li><a href="javascript:;" title="Second Level Link">Second Level Link</a>
                                    	<ul class="three_level">
                                            <li><a href="javascript:;" title="Second Level Link">Third Level Link</a></li>
                                            <li><a href="javascript:;" title="Second Level Link">Third Level Link</a></li>
                                            <li><a href="javascript:;" title="Second Level Link">Third Level Link</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;" title="Second Level Link">Second Level Link</a></li>
                                </ul>
                            </li>
                            <li><a href="http://www.criterionindustries.com.au/contactus/" title="Contact Us">Contact Us</a></li>
                            <li><a href="http://www.criterionindustries.com.au/aboutus/" title="About Us">About Us</a></li>
                        </ul>-->
                    </div>
                </div>
            </div>
            <!-- menu wrapper end -->
        </div>
    </div>
</div>
<!-- header wrapper pad end -->

<div class="clear"></div>
<?php
if ( is_home() ) {
?>
<!-- bradcrumb pad start -->
<div class="inner_banner bannered">
    <div class="main">
        <div class="bradcrum"> 
            <ul>
                <li><a title="Go to Home Page" href="http://www.criterionindustries.com.au/">Home</a></li>
                <li>Latest News</li>
            </ul>
        </div>
        <h1>Latest News</h1>
       
	</div>
</div>
<!-- bradcrumb pad end -->
<?php } ?>

<?php
if ( is_404() ) {
?>
<!-- bradcrumb pad start -->
<div class="inner_banner bannered">
    <div class="main">
        <div class="bradcrum"> 
            <ul>
                <li><a title="Go to Home Page" href="http://www.criterionindustries.com.au/">Home</a></li>
                 <li><a href="<?php echo get_home_url(); ?>" title="Latest News">Latest News</a></li>
                  <li>404 Page Not Found</li>
            </ul>
        </div>
        <h1>404 Page Not Found</h1>
       
	</div>
</div>
<!-- bradcrumb pad end -->
<?php } ?>


<?php
if ( is_category() ) {
?>
<!-- bradcrumb pad start -->
<div class="inner_banner bannered">
    <div class="main">
        <div class="bradcrum"> 
            <ul>
                <li><a title="Go to Home Page" href="http://www.criterionindustries.com.au/">Home</a></li>
                <li><a href="<?php echo get_home_url(); ?>" title="Latest News">Latest News</a></li>
                <li><?php foreach((get_the_category()) as $category) {
    echo $category->cat_name . ' ';
} ?></li>
            </ul>
        </div>
        <h1><?php foreach((get_the_category()) as $category) {
    echo $category->cat_name . ' ';
} ?></h1>
       
	</div>
</div>
<!-- bradcrumb pad end -->
<?php } ?>

<?php
if ( is_single() ) {
?>
<!-- bradcrumb pad start -->
<div class="inner_banner bannered">
    <div class="main">
        <div class="bradcrum"> 
            <ul>
                <li><a title="Go to Home Page" href="http://www.criterionindustries.com.au/">Home</a></li>
               <li><a href=" <?php echo get_home_url(); ?> " title="Latest News">Latest News</a></li>
                
                <li><?php the_title(); ?></li>
            </ul>
        </div>
        <h1><?php the_title(); ?></h1>
       
	</div>
</div>

<!-- bradcrumb pad end -->
<?php } ?>
<?php
if ( is_search() ) {
?>
<!-- bradcrumb pad start -->
<div class="inner_banner bannered">
    <div class="main">
        <div class="bradcrum"> 
            <ul>
                <li><a title="Go to Home Page" href="http://www.criterionindustries.com.au/">Home</a></li>
               
                
                <li>Search</li>
            </ul>
        </div>
        <h1>Search</h1>
       
	</div>
</div>

<!-- bradcrumb pad end -->
<?php } ?>
<div id="page" class="hfeed site">
	

	<div id="main" class="wrapper">