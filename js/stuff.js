/*********************************************************
**********************************************************
Dropdown
**********************************************************
*********************************************************/

$('nav li ul').hide().removeClass('fallback');
$('nav li').hover(
  function () {
    $('ul', this).stop().slideDown(100);
  },
  function () {
    $('ul', this).stop().slideUp(100);
  }
);


/*********************************************************
**********************************************************
Sticky Nav Bar
**********************************************************
*********************************************************/
$(function() {$('.article-wrapper').hover(function(){
    $('.article-image-wrapper').css({
		'border': '1px solid #00A8BD'
		});
	 $('.article-wrapper h2').css({
		'color': ' #00A8BD',
		})
	},
function(){
    $('.article-image-wrapper').css({'border': '1px solid black'});
	 $('.article-wrapper h2').css({
		'color': 'black',
		})
});

	var move = function() {
		var scroll_top = $(window).scrollTop();
		var off_set = $("#anchor").offset().top;
		var nav_bar = $("#nav-wrapper");
		var content_wrapper = $("#content-wrapper");
		var selected_page = $("#home");
		if ((scroll_top + 30) > (off_set + 30)) {
			nav_bar.css({
				"width": "100%",
				position: "fixed",
				"margin-top": "0",
				top: "0",
			});
			content_wrapper.css({
				"margin-top": "30",
			});
			selected_page.css({
			});
			
		} else {
			if (scroll_top <= off_set) {
				nav_bar.css({
					"width": "100%",
					position: "relative",
					"margin-top": "0",
					top : "0",
				});
				content_wrapper.css({
				"margin-top": "0",
				});
				selected_page.css({
				});
			}
	}
};
$(window).scroll(move);
move();
});

/*********************************************************
**********************************************************
Scrollax bar
**********************************************************
*********************************************************/ 
var page = document.getElementById('container')
var heading = document.getElementById('parallax_wrapper')
 
function parallax(){
 var scrolltop = window.pageYOffset // get number of pixels document has scrolled vertically 
 container.style.top = +scrolltop * .2 + 'px' // move content at 20% of scroll rate
 parallax_wrapper.style.top = +scrolltop * .5 + 'px' // move img at 50% of scroll rate
}
 
window.addEventListener('scroll', function(){ // on page scroll
 requestAnimationFrame(parallax) // call parallaxbubbles() on next available screen paint
}, false)



/*********************************************************
**********************************************************
Slider	
**********************************************************
*********************************************************/
var step=0
function slideit(){
if (!document.images)
return
document.getElementById('slide').src = slideimages[step].src
if (step<2)
step++
else
step=0
setTimeout("slideit()",2500)
}
slideit()
/*********************************************************
**********************************************************
Hightlight stuff on hover for article
**********************************************************
*********************************************************/




$(':header').addClass('headline');
//$('li:lt(3)').hide().fadeIn(1500);
$('li.card').on('click', function() {
	$(this).remove();
});

/*********************************************************
**********************************************************
Date
**********************************************************
*********************************************************/


document.getElementById("demo").innerHTML = Date();


