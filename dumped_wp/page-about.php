<?php

  $welcome_about="London-based freelance Web Designer and Front-end Web Developer. I build imaginative websites, designed to be totally unique, to make work stand out from the crowd";

?>
<?php get_header();?>

  <body id="about_body">
    <div id="wrap">
    <section id="red" >
      <div class="container">
        <div class="container_about">
          <header class="clearfix">
            <div class="logo col-md-3 col-xs-12 pull-left" id="logo_ontop"> 
              <a href="index.html"><img src="<?php bloginfo('template_directory');?>/images/logo_whitetagline.png" id="logo"/> </a> <!-- <h1> Holly Challenger </h1> -->
            </div><!--closed col 3-->
            <div class="navbar navbar-default col-md-9 col-sm-12" id="about_nav" role="navigation">
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
                  <li><a href="<?php bloginfo('template_directory');?>/index.php"><span class="bck_hover"> </span>Home  </a></li>
                  <li class="active_tab"><a href="<?php bloginfo('template_directory');?>/about.php"><span class="bck_hover"> </span>About</a></li>
                  <li><a href="<?php bloginfo('template_directory');?>/services.php"><span class="bck_hover"> </span>Services</a></li>
                  <li><a href="<?php bloginfo('template_directory');?>/work.php"><span class="bck_hover"> </span>Portfolio</a></li>
                  <li><a href="<?php bloginfo('template_directory');?>/contact.php"><span class="bck_hover"> </span>Contact</a></li>
                </ul>
              </div><!--nav-collapse -->
            </div> <!--nav-default -->
          </header>
          <div id="home_content">
            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-3 fadeinleft" id="lefthome">
                <img src="<?php bloginfo('template_directory');?>/images/bird.png" class="img-responsive" alt="Responsive image" height="100" id="bird"/>
              </div>
              <div class="col-md-8 col-xs-12 col-sm-6 fadein" id="home_text">
                <h2>About me </h2>
                  <p class="welcome_text" id="about_p">I'm a freelance web developer living in Brixton, South London. 
                    I design and code creative and responsive websites, which adapt to multiple devices. <br> 
                    A graduate of General Assembly, I am fluent in Front-end web languages, including HTML5, CSS3, Javascript and Jquery. 
                    <br>I am a published <a href="http://http://www.amazon.co.uk/Abused-No-More-Refugee-Asylum-seeking-ebook/dp/B00ESH9W0A"> author</a> 
                    on service-user involvement and co-production. This expertise means I enjoy working collaboratively with clients to co-produce websites that 
                    perfectly suit their needs.</p>
              </div>
            </div><!-- row -->
          </div> <!-- /home content -->
        </div> <!-- /container about -->
    </section>
    
    <section id="quote_section">
      <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12 quote_fade">
          <blockquote id="quote_about"><span class"quotation">"</span>Design is so simple, that's why it is so complicated<span class"quotation">"</span> -Paul Rand</blockquote>
        </div>
      </div><!-- row -->
    </section><!-- /#quote_section -->
    <!--[if (IE 7)|(IE 8)]>
    <style>#doll_section {display: none;}</style>
    <![endif]--> 
    <div id="doll_section">
      <div class="row">
        <div class="col-md-12 col-xs-12  col-sm-12">
          <h2 id="funfacts">Behind the code</h2>
        </div>
        <div class="col-md-8 col-md-offset-2 col-xs-8 col-sm-8 col-sm-offset-1">
          <div id="stage" class="img-responsive">
          </div><!-- #stage -->
          <div id="fallback img-responsive"></div>
          </div>
      </div><!-- row -->
    </div> <!--doll section -->
    <!--<![endif]-->
    <a href="#" class="back-to-top"><img src="<?php bloginfo('template_directory');?>/images/arrow_top3.png" height="40px"></a>
      </div> <!-- /container -->
      </div> <!-- /wrap -->
    <div id="footer">
      <div class="container">
        <p class="footertext">Copyright Holly Challenger 2014</p>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/interactive-svg.js"></script>
    <script scr="<?php bloginfo('template_directory');?>/js/respond.min.js"></script>
    <script scr="<?php bloginfo('template_directory');?>/js/respond.src.min.js"></script>
    <script type="text/javascript">
    if($(window).width() > 1200) {
    tiles = $("#funfacts, #footer").fadeTo(0, 0);
    $(window).scroll(function(d,h) {
    tiles.each(function(i) {
        a = $(this).offset().top + $(this).height();
        b = $(window).scrollTop() + $(window).height();
        if (a < b) $(this).fadeTo(300,1);
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
