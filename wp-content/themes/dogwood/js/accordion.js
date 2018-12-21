$( document ).ready(function() {

// For Archive-Adoptables Page
// $('.icons-legend > div').hide();

var $tabs = $('.icons-legend > h3');

$tabs.click(function(){
	var $panel = $(this).next();

	if( $panel.is(':visible') ){
		$panel.slideToggle();
	}
	else{
		$('.icons-legend > div:visible')
		.slideToggle();
		$panel.slideToggle();
	}
})

// For Front Page Menu
$('.responsive-navigation > div').hide();

var $tabs = $('.responsive-navigation > button');

$tabs.click(function(){
	var $panel = $(this).next();

	if( $panel.is(':visible') ){
		$panel.slideToggle();
		$("button").attr("aria-expanded","false");
	}
	else{
		$('.responsive-navigation > div:visible')
		.slideToggle();
		$panel.slideToggle();
		$("button").attr("aria-expanded","true");
	}
})
});