<?php get_header(); ?>

    <div id="content">
    
		<?php if (have_posts()) : ?>
            <?php 	while (have_posts()) : the_post(); ?>
                <div class="posts">
                    <h1 id="post-<?php the_ID(); ?>" class="posts-title"><?php the_title(); ?></h1>
                    <p class="date"><?php the_time('F jS, Y') ?> by <?php the_author() ?> </p>
                   <p class="date" style="margin-top: -10px;"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
                    
                    <div class="posts-content">
						<?php the_content(); ?>
                        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
                    </div>
                    
                    <?php comments_template(); ?>
                </div>
            <?php endwhile; ?>
      <?php endif; ?>
      
      	<?php get_sidebar(); ?>
    
    	<div class="clear"></div>
      
    </div>
    <?php get_footer(); ?>
</div>
