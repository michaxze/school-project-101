     
<div id="sidebar">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
	  <li> <h2 class="sidebartitle"> <?php _e('Recent Posts'); ?> </h2> </li>
	  <ul>
        <?php the_post(); ?>
	  </ul>
      <h2 class="widgettitle">
        <?php _e('Archives'); ?>
      </h2>
      <li>
        <?php wp_get_archives('type=monthly'); ?>
      </li>
      <h2 class="widgettitle">
        <?php _e('Links'); ?>
      </h2>
      <li>
        <?php get_links('-1', '<li>', '</li>', '<br />', FALSE, 'id', FALSE, FALSE, -1, FALSE); ?>
      </li>
    <?php endif; ?>
    
    <li class="widget" style="text-align:center;">
    	<h2 class="widgettitle">Follow Us in Facebook</h2>
        <a href="http://www.facebook.com/home.php?#/group.php?v=info&ref=ts&gid=257207735076" title="Join Us in Facebook"></a>
    </li>
</div>
