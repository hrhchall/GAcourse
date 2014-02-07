 if($(window).width() > 870) {
$(function(){

	$("#stage").load('svg_russiandoll_interactive.svg',function(response){

		$(this).addClass("svgLoaded");
		
		
			});
});
}
		 else {
    $(".fallback").load('../images/russiandoll_interactive.png',function(response){

		$(this).addClass("img-responsive");
	
    		});
}

