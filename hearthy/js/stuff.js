/*********************************************************
**********************************************************
Sticky Nav Bar
**********************************************************
*********************************************************/
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
				"z-index" : 1,
			});
			content_wrapper.css({
				"margin-top": "30",
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
			}
	}
};


$(window).scroll(move);
move();


