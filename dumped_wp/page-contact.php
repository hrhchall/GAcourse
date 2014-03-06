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
                <li class="active_tab"><a href="<?php bloginfo('template_directory');?>/contact.html">Contact</a></li>
              </ul>
            </div><!--nav-collapse -->
          </div> <!--nav-default -->
        </header>
        <div id="contacts">
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-3 fadeinleft plane">
              <img src="<?php bloginfo('template_directory');?>/images/paper_plane.png"class="img-responsive" alt="Responsive image"/>
            </div>
            <div class="col-md-8 col-xs-12 col-sm-8 fadein" id="home_text">
              <h2>I'd like to hear from you</h2>
            </div>
          </div>
          <div class="row">  
            <div class="col-md-offset-2 col-md-8">
              <form name="sentMessage" class="well" id="contactForm"  novalidate>
                <legend><p class="contact_p">Send me a message</p></legend>
                <div class="control-group">
                  <div class="controls">
                    <input type="text" class="form-control" placeholder="Full Name" id="name" required data-validation-required-message="Please enter your name" />
                    <p class="help-block"></p>
                  </div>
                </div>   
                <div class="control-group">
                  <div class="controls">
                    <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email" />
                  </div>
                </div>  
               <div class="control-group">
                 <div class="controls">
                    <textarea rows="10" cols="100" class="form-control" placeholder="Message" id="message" required
                    data-validation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Min 5 character" maxlength="999" style="resize:none">
                    </textarea>
                  </div>
                </div>      
                <div id="success"> </div>
                <button type="submit" class="btn btn-primary pull-right">Send</button><br />
              </form>
            </div>
          </div>
      </div> <!--closed container -->
    </div> <!-- /wrap -->
    <div id="footer_services">
      <div class="container">
        <p class="footertext footertextservices">Copyright Holly Challenger 2014</p>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/jqbootstrapvalidation.js"></script>
    <script scr="<?php bloginfo('template_directory');?>/js/respond.min.js"></script>
    <script scr="<?php bloginfo('template_directory');?>/js/respond.src.min.js"></script>
    <script>
    $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
    </script>
    <script src="<?php bloginfo('template_directory');?>/js/contact_me.js"></script>
     <script src="<?php bloginfo('template_directory');?>/js/waypoints.min.js"></script>
     <script type="text/javascript">
    tiles = $("#skillshead, .headingfade, .header_line, .gridp").fadeTo(0, 0);

    $(window).scroll(function(d,h) {
    tiles.each(function(i) {
        a = $(this).offset().top + $(this).height();
        b = $(window).scrollTop() + $(window).height();
        if (a < b) $(this).fadeTo(200,1);
    });
});</script>
  <?php get_footer(); ?>
