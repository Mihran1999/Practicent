
//Responsive menu button click animation

$(document).ready(function() {
  $('.navbar-toggle').click(function() {
    $('.icon-bar-rotate-1').toggleClass('opacity-1');
    $('.icon-bar-rotate-2').toggleClass('opacity-2');
    $('.icon-bar-rotate-3').toggleClass('opacity-3');
    $('.icon-bar-rotate-4').toggleClass('bar-4');
    $('.icon-bar-rotate-5').toggleClass('bar-5');
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
		$(this).next().children('div.video-box').css({'z-index': '6', 'opacity': '1', 'display': 'block'})
		$(this).next().children('div.img-box').css({'z-index': '5', 'opacity': '0'})
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