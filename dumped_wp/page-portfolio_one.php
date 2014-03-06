<?php get_header();?>

  <body id="work_body">
    <div id="wrap">
      <div class="container">
        <header class="clearfix">
          <div class="logo col-md-3 col-xs-12 pull-left" id="logo_ontop"> 
            <a href="index.html"><img src="<?php bloginfo('template_directory');?>/images/logo_whitetagline.png" id="logo"/> </a> <!-- <h1> Holly Challenger </h1> -->
          </div><!--closed col 4-->
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
                <li><a href="<?php bloginfo('template_directory');?>/work.html">Portfolio</a></li>
                <li><a href="<?php bloginfo('template_directory');?>/contact.html">Contact</a></li>
              </ul>
             </div><!--nav-collapse -->
          </div> <!--nav-default -->
        </header>
        <div id="home_content">
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-3 fadein">
              <img src="<?php bloginfo('template_directory');?>/images/bricks.png"class="img-responsive bricks_folia" alt="Responsive image"/>
            </div>
            <div class="col-md-8 col-xs-12 col-sm-6 work_title fadein" id="home_text">
              <h2 class="serviceshead">/Portfolio</h2>
            </div>
          </div> <!--row-->
        </div>
      </div> <!-- /container -->
      <section id="white_stretch">
        <div class="container">
          <div id="home_content">
            <div class="row">
              <div class="col-md-7 col-sm-12 col-xs-12 fadein">
                <img src="images/reuben_bothscreens_xs3.png" alt="Responsive image" class="img-responsive screenshot"/>
              </div>
              <div class="col-md-5 col-xs-12 col-sm-12 fadein" id="home_text">
                <h2 class="workexample_title">Reuben Binns</h2>
                <p class="project_description">Reuben Binns is a researcher and consultant specialising in Personal Data. He hired me as a freelance web designer and developer to re-brand his web presence. The site is responsive and looks great on desktop, laptop, tablet and mobile devices. <br> <a href="reubenbinns.com"> Visit site</a></p>
              </div>
            </div> <!--row-->
            <div class="row">
              <div class="col-md-1 col-sm-1 col-xs-1">
                <a href="work.html"><img src="<?php bloginfo('template_directory');?>/images/left_arrow2.png" height="40px" class="left_arrow"></a>
              </div>
            </div>
          </div>
        </div> <!--closed container -->
      </section>
    </div> <!-- /wrap -->
    <div id="footer_services">
      <div class="container">
        <p class="footertext footertextservices">Copyright Holly Challenger 2014</p>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
    <script scr="<?php bloginfo('template_directory');?>/js/respond.min.js"></script>
    <script scr="<?php bloginfo('template_directory');?>/js/respond.src.min.js"></script>
     <script src="<?php bloginfo('template_directory');?>/js/waypoints.min.js"></script>
     <script type="text/javascript">
     if($(window).width() > 1200) {
    tiles = $("#skillshead, .headingfade, .header_line, .gridp").fadeTo(0, 0);
    
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
  <?php get_footer(); ?>
