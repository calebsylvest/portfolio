// remap jQuery to $
(function($){})(window.jQuery);


/* trigger when page is ready */
$(document).ready(function (){

	// your functions go here
	
	// add animated scroll to # links 
	function scrollTo(hash) {
	    location.hash = "#" + hash;
    }
    
    // create variable for use with Responsive-Nav.js
	var navigation = responsiveNav("#nav");
    
    // the stickem script to make header fixed when scroll to top
	$(document).ready(function() {
		//sticky Nav
		// grab the initial top offset of the navigation -use .front-header to only call header bar on homepage
		var sticky_navigation_offset_top = $('.front-header.stickem').offset().top;
		
		// our function that decides weather the navigation bar should have "fixed" css position or not.
		var sticky_navigation = function(){
			var scroll_top = $(window).scrollTop(); // our current vertical position from the top
			
			// if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
			if (scroll_top > sticky_navigation_offset_top) { 
				$('.front-header.stickem').css({ 'position': 'fixed', 'top':0, 'left':0 });
			} else {
				$('.front-header.stickem').css({ 'position': 'absolute', 'bottom':0, 'top':'auto' }); 
			}   
		};
		
		scroller();
		window.onresize = scroller;
		fadeSlide();
		
		
		sticky_navigation();
		$(window).scroll(function() {
			 sticky_navigation();
		});
	});
	var counter;
	var slideTime = 3000;

	function fadeSlide(){
		counter = $('.slide').length
		fadeInterval = window.setInterval(function(){
			if(counter == 1){
				$('.slide').fadeIn('slow')
				counter = $('.slide').length;
			}
			else{
			$('.slide').slice((counter-1), counter).fadeOut('slow');
			counter--;
			}
			
	    }, slideTime);
	}
	
	function filterPath(string) {
		  return string
		    .replace(/^\//,'')
		    .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
		    .replace(/\/$/,'');
		  }
		  
    function scroller(){
		  var locationPath = filterPath(location.pathname);
		  $('a[href*=#]').each(function() {
		    var thisPath = filterPath(this.pathname) || locationPath;
		    if (  locationPath == thisPath
		    && (location.hostname == this.hostname || !this.hostname)
		    && this.hash.replace(/#/,'') ) {
		      var $target = $(this.hash), target = this.hash;
		      if (target) {
		        var targetOffset = $target.offset().top - $('.front-header .container').height();
		        $(this).click(function(event) {
		          event.preventDefault();
		          $('html, body').animate({scrollTop: targetOffset}, 400, function() {
		            location.hash = target;
		          });
		        });
		      }
		    }
		    });
	} // end stickem function

});


/* optional triggers

$(window).load(function() {
	
});

$(window).resize(function() {
	
});

*/