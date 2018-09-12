var j$ = jQuery.noConflict();


j$(document).ready(function(){

	// Init ScrollMagic
	var controller = new ScrollMagic.Controller();

	// build a scene
	var ourScene = new ScrollMagic.Scene({
		triggerElement: '.header',
		// duration: '100%',
		triggerHook: 0
	})
	.setClassToggle('.top-navigation', 'fade-in') // add class to project01
	// .addIndicators({})
	.addTo(controller);

});
