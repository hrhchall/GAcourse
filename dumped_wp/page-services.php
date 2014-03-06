<?php get_header();?>

    <body id="home_body">
      <div id="wrap">
        <section id="red" >
          <div class="container">
            <div class="container_services">
              <header class="clearfix">
                <div class="logo col-md-3 col-xs-12 pull-left" id="logo_ontop"> 
                  <a href="index.html"><img src="<?php bloginfo('template_directory');?>/images/logo_whitetagline.png" id="logo"/> </a> <!-- <h1> Holly Challenger </h1> -->
                </div><!--closed col 4-->
                <div class="navbar navbar-default col-md-9 col-sm-12" role="navigation">
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
                      <li class="active_tab"><a href="<?php bloginfo('template_directory');?>/services.html">Services</a></li>
                      <li><a href="<?php bloginfo('template_directory');?>/work.html">Portfolio</a></li>
                      <li><a href="<?php bloginfo('template_directory');?>/contact.html">Contact</a></li>
                    </ul>
                  </div><!--nav-collapse -->
                </div> <!--nav-collapse -->
              </header>
              <div id="home_content">
                <div class="row">
                  <div class="col-md-4 col-sm-6 col-xs-3 fadein" id="rubix">
                    <img src="<?php bloginfo('template_directory');?>/images/cube2.png"class="img-responsive cube" alt="Responsive image"/>
                  </div>
                  <div class="col-md-8 col-xs-12 col-sm-6 fadein" id="home_text">
                    <h2 class="serviceshead">Playful Problem-solving</h2>
                    <p class="welcome_text services_text">Whether you're a freelancer looking for a developer to bring your work to life or a start-up or small business looking to develop your online presence, I'm interested. </p>
                  </div>
                </div> <!--row-->
              </div><!--home content-->
        </section>
        <section id="bottom_services">
          <div id="bottom_wrap">
            <div class="container">
              <div class="row ">
                <h3 id="skillshead">Skills and Expertise</h3>
                <div class="col-md-4 col-sm-6 col-xs-6 grid_full">
                  <div class="header_line"> </div>
                  <h3 class="headingfade gridheading">Web development</h3>
                  <p class="gridp">Fluent in HTML5, CSS3, Javacript and Jquery. I adhere to WC3 standards.
                  </p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 grid_full">
                  <div class="header_line"> </div>
                  <h3 class="headingfade gridheading">Responsive design</h3>
                  <p class="gridp">I build websites that work perfectly on desktops, laptops, tablets and mobiles.
                  </p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 grid_full">
                  <div class="header_line"> </div>
                  <h3 class="headingfade gridheading">Visual Design</h3>
                  <p class="gridp">I create imaginative brand design to support new website design.
                  </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-6 grid_full bottom">
                  <div class="header_line"> </div>
                    <h3 class="headingfade gridheading">Content Management</h3>
                      <p class="gridp">I transform my own designs into customized Wordpress themes, which enables clients to manage the content of entire website.
                      </p>
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-6 grid_full bottom">
                    <div class="header_line"> </div>
                    <h3 class="headingfade gridheading">SEO</h3>
                    <p class="gridp">I have good knowledge of SEO and can work with you to improve traffic from search engines and get new visitors to your site. </p>
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-6 grid_full bottom">
                    <div class="header_line"> </div>
                      <h3 class="headingfade gridheading">Co-Production</h3>
                        <p class="gridp">I can deliver workshops with your team to involve them in the design of your new site.
                        </p>
                    </div>
                  </div> 

                </div><!-- row -->
              </div><!-- container -->
            </div><!-- bottom wrap -->
          </section>
          <a href="#" class="back-to-top"><img src="<?php bloginfo('template_directory');?>/images/arrow_top3.png" height="40px"></a>
            </div> <!-- /container -->
        </div><!-- /container services -->
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
    <script scr="js/respond.src.min.js"></script>
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
