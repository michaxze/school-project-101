<?php get_header(); ?>

    <div id="content">
    
		<?php if (have_posts()) : ?>
            <?php 	while (have_posts()) : the_post(); ?>
                <div class="posts">
                    <h1 id="post-<?php the_ID(); ?>" class="title"><?php the_title(); ?></h1>
                    <div class="posts-content"><?php the_content(); ?></div>
                </div>
            <?php endwhile; ?>
      <?php endif; ?>
      
      	<?php get_sidebar(); ?>
    
    	<div class="clear"></div>
      
    </div>
    <?php get_footer(); ?>
</div>