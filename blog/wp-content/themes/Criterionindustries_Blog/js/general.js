
var basepath=jq11("#generaljs").attr("rel");

jQuery.when(
    jQuery.getScript( basepath+"/js/jquery.flexslider-min.js" ),
    jQuery.getScript( basepath+"/js/menu/jquery.meanmenu.js" ),
    jQuery.getScript( basepath+"/js/owl.carousel.min.js" ),
    jQuery.getScript( basepath+"/js/jquery.fancybox.js" ),
   
    jQuery.Deferred(function( deferred ){
        jQuery( deferred.resolve );
    })
).done(function(){

jq11(document).ready( function(e) {
		 jQuery('.nav').meanmenu();
	jq11('.flexslider').flexslider({
			  animation: "slide",
			  pauseOnHover: true, 
			});
    jq11("#service-slider").owlCarousel({
		items : 3,
		itemsCustom : false,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [980,3],
		itemsTablet: [768,2],
		itemsTabletSmall: false,
		itemsMobile : [480,1],
		singleItem : false,
		itemsScaleUp : false,
		navigation :true,
		slideSpeed:800
	});
	
	
	
	jq11(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});

});
