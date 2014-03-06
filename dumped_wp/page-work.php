<?php get_header();?>

  <body id="work_body">
    <div id="wrap">
      <section id="red" >
        <div class="container">
          <div class="container_work">
          <header class="clearfix">
            <div class="logo col-md-3 col-xs-12 pull-left" id="logo_ontop"> 
              <a href="index.html"><img src="<?php bloginfo('template_directory');?>/images/logo_whitetagline.png" id="logo"/> </a> <!-- <h1> Holly Challenger </h1> -->
            </div><!--closed col 3-->
            <div class="navbar navbar-default col-md-9 col-sm-12" id="work_nav" role="navigation">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button> 
              </div>
              <div class="navbar-collapse collapse" id="menu">
                <ul class="nav navbar-nav">
                  <li><a href="<?php bloginfo('template_directory');?>/index.html">Home</a></li>
                  <li><a href="<?php bloginfo('template_directory');?>/about.html">About</a></li>
                  <li><a href="<?php bloginfo('template_directory');?>/services.html">Services</a></li>
                  <li class="active_tab"><a href="<?php bloginfo('template_directory');?>/work.html">Portfolio</a></li>
                  <li><a href="<?php bloginfo('template_directory');?>/contact.html">Contact</a></li>
                </ul>
              </div><!--nav-collapse -->
            </div> <!--nav-default -->
          </header>
          <div id="home_content">
            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-3 fadein" id="lefthome">
                <img src="<?php bloginfo('template_directory');?>/images/bricks.png"class="img-responsive bricks_folia" alt="Responsive image"/>
              </div>
              <div class="col-md-8 col-xs-12 col-sm-6 fadein work_title" id="home_text">
                <h2>Portfolio/</h2>
              </div>
            </div> <!--row-->
          </div>
        </div> <!-- /container -->
      </section>
      <section id="portfolio_grid">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <a href="#">
                <div class="img_wrap">
                  <img src="<?php bloginfo('template_directory');?>/images/personalsite_home2.jpg" class="img-responsive work-opacity_hover"/>
                  <p class="img_desc"> <span class="imagetitle">/// Personal Site /// </span> <br>and description  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam <br> <span class="more_work">More about this project </span></p>
                </div> <!--closed imgwrap -->
              </a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <a href="#">
                <div class="img_wrap">
                  <img src="<?php bloginfo('template_directory');?>/images/petersite_homemd.jpg" class="img-responsive work-opacity_hover"/>
                  <p class="img_desc"> <span class="imagetitle">/// Peter Tansley /// </span> <br>and description  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam <br> <span class="more_work">More about this project </span></p>
                </div> <!--closed imgwrap -->
              </a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <a href="portfolio_one.html">
                <div class="img_wrap">
                  <img src="<?php bloginfo('template_directory');?>/images/reuben_homemd3.jpg" class="img-responsive work-opacity_hover"/>
                  <p class="img_desc"> <span class="imagetitle">/// Reuben Binns /// </span> <br>and description  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam <br> <span class="more_work">More about this project </span></p>
                </div> <!--closed imgwrap -->
              </a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <a href="#">
                <div class="img_wrap">
                  <img src="<?php bloginfo('template_directory');?>/images/dreamsite_homemd.jpg" class="img-responsive work-opacity_hover"/>
                  <p class="img_desc"> <span class="imagetitle">/// Dream Team /// </span> <br>and description  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam <br><span class="more_work">More about this project </span></p>
                </div> <!--closed imgwrap -->
              </a>
            </div>
          </div><!-- row-->
          <a href="#" class="back-to-top"><img src="<?php bloginfo('template_directory');?>/images/arrow_top3.png" height="40px"></a>
        </div> <!-- /container -->
      </section>
    </div> <!-- /wrap -->
    <div id="footer_services">
      <div class="container">
        <p class="footertext footertextservices">Copyright Holly Challenger 2014</p>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
     <script src="<?php bloginfo('template_directory');?>/js/waypoints.min.js"></script>
      <script scr="<?php bloginfo('template_directory');?>/js/respond.min.js"></script>
    <script scr="<?php bloginfo('template_directory');?>/js/respond.src.min.js"></script>
     <script type="text/javascript">
    if($(window).width() > 1200) {
    tiles = $("").fadeTo(0, 0);
    $(window).scroll(function(d,h) {
    tiles.each(function(i) {
        a = $(this).offset().top + $(this).height();
        b = $(window).scrollTop() + $(window).height();
        if (a < b) $(this).fadeTo(200,1);
    });
});
  }

  else {
    console.log('Less than 1200');
}
    </script>
  <script type="text/javascript">
jQuery(document).ready(function() {
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });
    
    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});

  </script>
 <?php get_footer(); ?>
