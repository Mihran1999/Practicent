
//Responsive menu button click animation

 $(document).ready(function() {
        $('#button').click(function() {
            $('.header_menu_responsive').slideToggle("normal");
            $('.first').toggleClass("rotate_first");
     		$('.invisible_line').toggleClass("invisible_line_rotate");
     		$('.second').toggleClass("rotate_second");
     		$('.third').toggleClass("rotate_third");
            $('.header_menu_responsive').css('display') == 'block !important';		
        });
    });

//Video player

$(document).ready(function() {
	$('.service-smart-object').click(function() {
		$(this).fadeOut(100);
		$(this).next().children('div.video-box').css({'z-index': '6', 'opacity': '1', 'visibility': 'visible'});
		$(this).next().children('div.img-box').css({'z-index': '5', 'opacity': '0', 'visibility': 'hidden'});
	})
}) 
