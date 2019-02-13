// ****
// MENU OPEN CLOSE ESC BIND
$(document).ready(function () {
	$('.menu-opener').click(function(e){
		$(".menu-container").css("display","block");
	});
	$('.menu-closer').click(function(e){
		$(".menu-container").css("display","none");
	});
	document.onkeydown = function(evt) {
	    evt = evt || window.event;
	    var isEscape = false;
	    if ("key" in evt) {
	        isEscape = (evt.key === "Escape" || evt.key === "Esc");
	    } else {
	        isEscape = (evt.keyCode === 27);
	    }
	    if (isEscape) {
	       $(".menu-container").css("display","none");
	    }
	};
});


// ****
// HP Slider init
$(document).ready(function () {
	var mySwiper = new Swiper ('.swiper-container', {
	  loop: true,
	  grabCursor: true,
	})
});

// ******
// BODY SLIDER
var mySwiper = new Swiper('.swiper-body', {
  loop: true,
  mousewheel: true,
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true
  },
});



// ****
// GALLERY INIT
$(window).on('load', function () {
    var $container = $('.portfolioContainer');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });

    $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        return false;
    });
});
$(document).ready(function() {
    $('.image-popup').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-fade',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        }
    });
});



/// ****
// PROBLEM RESENI FILTER
$(window).on('load', function () {
	// set up variables
	var categoryFilters = [];
	var categoryFilter;
	
	// init Isotope
	var $container = $('#container').isotope({
	  itemSelector: '.item',
	  filter: function() {
	    var length = categoryFilters.length;
	    if ( !length ) {
	      return true;
	    }
	    var $this = $(this);
	    // check if all category filter match
	    for ( var i=0; i<length; i++ ) {
	      var catFilter = categoryFilters[i];
	      if ( !$this.is('[data-category*=' + catFilter + ']') ) {
	        return false;
	      }
	    }
	    // otherwise match
	    return true;
	  }
	});
	
	// filter with checkboxes
	var $checkboxes = $('#form-ui input');
	
	$checkboxes.change( function() {
	  categoryFilters = [];
	  $checkboxes.each( function( i, elem ) {
	    if ( elem.checked ) {
	      categoryFilters.push( elem.value );
	      $(this).parent().addClass("active");
	    }
	    else {
		    $(this).parent().removeClass("active");
	    }
	    console.log( categoryFilters.join(',') )
	    $container.isotope();
	  });
	  
	  
	  $('#container').imagesLoaded().progress( function() {
        $('#container').isotope('layout');
    });

	});
});


/// ****
// PROBLEM RESENI FILTER ALT
$(".chosen-select").chosen();

