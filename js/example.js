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

