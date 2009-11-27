<?php get_header(); ?>

<div id="content">

		<div class="posts">
        <h2 style="margin-bottom: 10px;">
			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
            <?php /* If this is a category archive */ if (is_category()) { ?>
            <?php echo single_cat_title(); ?>
            <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
            Archive for
            <?php the_time('F jS, Y'); ?>
            <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
            Archive for
            <?php the_time('F, Y'); ?>
            <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
            Archive for
            <?php the_time('Y'); ?>
            <?php /* If this is a search */ } elseif (is_search()) { ?>
            Search Results
            <?php /* If this is an author archive */ } elseif (is_author()) { ?>
            Author's Archive
            <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
              Blog Archives
            <?php } ?>
        </h2>
		<?php while (have_posts()) : the_post(); ?>
			
				<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="posts-title"><?php the_title(); ?></a></h1>
                <p class="date"><?php the_time('F jS, Y') ?> by <?php the_author() ?> </p>
                <p class="date" style="margin-top: -10px;"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
                <div style="border-bottom: 1px solid #CCC; margin-bottom: 15px;"></div>
				 	
		<?php endwhile; ?>
		</div>
    <!--single.php end-->
</div>

<!-- permanent sidebar -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>