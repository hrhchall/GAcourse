jQuery('.navigation, .call-to-action').localScroll({
		offset: -50
	});

	jQuery("#top").click(function () {
		return jQuery("body,html").stop().animate({
			scrollTop: 0
		}, 500, "easeOutCubic"), !1;
	});
