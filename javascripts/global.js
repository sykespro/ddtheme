
$(document).ready(function(){
	
	$('#bannerSlider').owlCarousel({
		loop:true,
		autoplay: true,
		margin:10,
		nav:false,
		items:1
	})
	
	$('#holidaySlider').owlCarousel({
		loop:true,
		autoplay: true,
		margin:10,
		nav:false,
		items:1
	})
	
	$('#gallerySlider').owlCarousel({
		loop:true,
		autoplay: true,
		margin:10,
		nav:false,
		items:1
	})
	
	jQuery('.fancybox').fancybox();
	
	placeholders();
    function placeholders() {
        jQuery('.tnp-email').each(function() {
            jQuery(this).attr('placeholder', 'Enter Your Email Address' );
        });
    }
	
	jQuery("#mmenu").mmenu({
		offCanvas: {
		   position  : "right"
		}
	 });
 
});



 

