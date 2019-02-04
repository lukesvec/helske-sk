$('.menu-opener').click(function(e){
	$(".menu-container").css("display","block");
});
$('.menu-closer').click(function(e){
	$(".menu-container").css("display","none");
});


$(document).ready(function () {
	var mySwiper = new Swiper ('.swiper-container', {
	  loop: true,
	  grabCursor: true,
	  
	})
});

