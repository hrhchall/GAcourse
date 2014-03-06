<?php

  $sitetitle ="Beautiful and Functional Websites";
  $welcome_index="London-based freelance Web Designer and Front-end Web Developer. I build imaginative websites, designed to be totally unique, to make work stand out from the crowd";

?>
<?php get_header();?>
  <body id="home_body">
    <div id="wrap">
      <div class="container">
        <div class="container_home">
          <header class="clearfix">
            <div class="logo col-md-3 col-xs-12 pull-left" id="logo_ontop"> 
              <a href="home"><img src="<?php bloginfo('template_directory');?>/images/logo_whitetagline.png" id="logo"/> </a><!-- <h1> Holly Challenger </h1> -->
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
              <?php wp_nav_menu( array( 'theme_location' => 'header-menu','menu_class' => 'nav navbar-nav') ); ?>
            </div><!--nav-collapse -->
          </div> <!--nav-default -->
        </header>
        <div id="home_content">
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-3" id="lefthome">
              <img src="<?php bloginfo('template_directory');?>/images/newrussiandoll.png" class="img-responsive" alt="Responsive image" height="100"  id="equals"/>
            </div>
            <div class="col-md-8 col-xs-12 col-sm-6" id="home_text">
              <h2><?php echo $sitetitle ?> </h2>
              <p class="welcome_text"><?php echo $welcome_index ?> </p> <span id="findoutmore"> <p> <a href="work">See examples of my work <p></a></span>
            </div>
          </div><!-- row -->
        </div> <!-- /home content -->
      </div> <!-- /container home -->
    </div> <!-- /container -->
 </div> <!-- /wrap -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
    <script scr="<?php bloginfo('template_directory');?>/js/respond.min.js"></script>
    <script scr="<?php bloginfo('template_directory');?>/js/respond.src.min.js"></script>
   <?php get_footer(); ?>
