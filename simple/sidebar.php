<!-- begin sidebar -->
<div id="sidebar-wrap" class="grid_12">
<div id="sidebar">
 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
    <div class="grid_3">
      <h2>Categories</h2>
      <ul>
        <?php wp_list_categories('sort_column=name&title_li='); ?>
      </ul>
    </div>
    <div class="grid_3">
      <h2>Archives</h2>
      <ul>
        <?php wp_get_archives('type=monthly'); ?>
      </ul>
    </div>
    <div class="grid_3">
        <?php include (TEMPLATEPATH . '/searchform.php'); ?>
    </div>
   
    <?php endif; ?>
</div>
</div>
<!-- end sidebar -->
