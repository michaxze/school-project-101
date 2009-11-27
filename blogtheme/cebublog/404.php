<?php get_header(); ?>

	<div id="promo">
    	<h1 id="promo-line"> Cheap, fast and reliable web hosting </h1>
        <p style="color:#999999; font-weight:normal; font-style:italic; letter-spacing: 1px; font-size: 14px;"> Price-optimized web hosting plan with large disk space and technical support </p>
        
        <div style="text-align:right; ">
        	<img src="<?php bloginfo('template_directory'); ?>/images/package-plan300.png" />
            <img src="<?php bloginfo('template_directory'); ?>/images/package-plan500.png" />
            <img src="<?php bloginfo('template_directory'); ?>/images/package-plan1000.png" />
            <img src="<?php bloginfo('template_directory'); ?>/images/package-planblog.png" />
        </div>
        
    </div>

    <div id="content">
    
		<?php if (have_posts()) : ?>
            <?php 	while (have_posts()) : the_post(); ?>
                <div class="posts">
                    <h2 id="post-<?php the_ID(); ?>" style="margin-left: 30px;"><a href="<?php the_permalink() ?>" id="promo-line" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>				  
                    <div class="posts-content"><?php the_content(); ?></div>
                </div>
            <?php endwhile; ?>
      <?php endif; ?>
    </div>
    
    
</div>
<div class="clear"></div>

<?php get_footer(); ?>
