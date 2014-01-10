//Simple jQuery Slideshow Script
   // Released by Jon Raasch (jonraasch.com) under FreeBSD license: free to use or modify, not responsible for anything, etc.  Please link out to me if you like it :)


function slideSwitch() {
     if ($(window).width() < 999) {
    var $active = $('#tablet_slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#tablet_slideshow IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#tablet_slideshow IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );

 
    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 800, function() {
            $active.removeClass('active last-active');
        });
}
}

$(document).ready(function() {
    setInterval( "slideSwitch()", 4000 );
});


