<?php get_header(); ?>
<!-- content start -->
	<div class="grid_10 alpha omega prefix_1">

	
	<div class="posts-wrap">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  	<h2 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
      <?php the_title(); ?> &nbsp;&#x261e;
      </a></h2>
  <div id="post" class="prefix_1">
  <div class="meta">
    <?php the_date(); ?>
    <?php edit_post_link(__('Edit This')); ?>
    <br />
    <?php _e("Filed under:"); ?>
    <?php the_category(',') ?>
  </div>
    
      <?php
$myExcerpt = get_the_excerpt();
if ($myExcerpt != '') {
    // Some string manipulation performed
}
echo $myExcerpt; // Outputs the processed value to the page
?>
 
 
</div>

  <?php endwhile; else: ?>
  <p>
    <?php _e('Sorry, no posts matched your criteria.'); ?>
  </p>
  <?php endif; ?>
  
  <?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>
</div>
	<div style="clear: both"></div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
