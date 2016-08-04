
//Responsive menu button click animation

 $(document).ready(function() {
        $('#button').click(function() {
          $('.header_menu_responsive').slideToggle('normal');
          $('.first').toggleClass('rotate_first');
     		  $('.invisible_line').toggleClass('invisible_line_rotate');
     		  $('.second').toggleClass('rotate_second');
     		  $('.third').toggleClass('rotate_third');
          $('.header_menu_responsive').css('display', 'block !important');	
        });
    });

// Scrolling header menu

var $document = $(document)

$document.scroll(function() {
  if ($document.scrollTop() >= 5) {
    $('#page_start .header').addClass('scroll_animate');
    $('#page_start .header .logo').addClass('scroll_animate_fadeout');
    $('#page_start .header .logo_scroll').addClass('scroll_animate_fadein');
    $('#page_start .header .menu a').addClass('scroll_animate_a');
    $('.header_menu_responsive').addClass('scroll_animate_rspmenu');
  } else {
    $('#page_start .header').removeClass('scroll_animate');
    $('#page_start .header .logo').removeClass('scroll_animate_fadeout');
    $('#page_start .header .logo_scroll').removeClass('scroll_animate_fadein');
    $('#page_start .header .menu a').removeClass('scroll_animate_a');
    $('.header_menu_responsive').removeClass('scroll_animate_rspmenu');
  }
});

//Video player

$(document).ready(function() {
	$('.service-smart-object').click(function() {
		$(this).fadeOut(100);
		$(this).next().children('div.video-box').css({'z-index': '6', 'opacity': '1', 'visibility': 'visible'})
		$(this).next().children('div.img-box').css({'z-index': '5', 'opacity': '0', 'visibility': 'hidden'})
	});
}); 

//Counter 

var value = 0;

$(document).ready(function() {
  $('#minus').click(function(){
    value -=1
    if(value<=0)value=0;
    document.getElementById('value').innerHTML = value;
  });
});    

$(document).ready(function() {
  $('#plus').click(function(){
    value +=1
    document.getElementById('value').innerHTML = value;
  });
});
		
$(document).ready(function() {
  $('#reset').click(function(){
    document.getElementById('value').innerHTML = value=0;
  });
});