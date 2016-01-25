var isMobile = window.matchMedia("only screen and (max-width: 760px)");

    
$(document).ready(function() {
	$(".review-content").hide();
	$(".arrow-up").hide();
	$(".review").click(function(){
		$(this).next(".review-content").slideToggle(500);
		$(this).find(".arrow-up, .arrow-down").toggle();
	});
	/****** ///// for tablet Menu Dropdown //// ******/
	$(".menu-table-fix ul").hide();
	$(".menu-table-fix .menu-up").hide();
	$(".menu-table-fix p").click(function(){
		$(this).next(".menu-table-fix ul").slideToggle(500);
		$(this).find(".menu-up,.menu-down").toggle();
	});
	/*** bp popup ****/
	$("#element_to_pop_up").hide();
       $("#my-button").click(function(){
         $('#element_to_pop_up').bPopup({
           modalColor: '#000'
       });
     });
    /******** Page animation ********/
    $('#page_animation').fadeOut(0, function(){
            $(this).slideDown(400);
        });
    $('.menu a,.logo a').click(function(e){
                e.preventDefault();
                var $href = $(this).attr('href');
                $('#page_animation').fadeOut(400, function(){
                     setTimeout(function() {window.location = $href}, 400);
                });
            });
	/******** Mobile menu fixe at top when scroll ********/
	if($(window).width()<768){
		$('.mb-menu').stickThis({
        top:        0,      // top position of sticky element, measured from 'ceiling'
        minscreenwidth: 0,      // element will not be sticky when viewport width smaller than this
        maxscreenwidth: 9999,     // element will not be sticky when viewport width larger than this 
        zindex:     99999,      // z-index value of sticky element
        debugmode:  false   // when true, errors will be logged to console
        });
	}
	
});

