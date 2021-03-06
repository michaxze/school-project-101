<div id="comments-wrap">
  <?php if ( !empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
  <p>
    <?php _e('Enter your password to view comments.'); ?>
  </p>
  <?php return; endif; ?>
  <?php // Begin Comments & Trackbacks ?>
  <?php if ( $comments ) : ?>
  <?php // Begin Trackbacks ?>
  <?php foreach ($comments as $comment) : ?>
  <?php if ($comment->comment_type == "trackback" || $comment->comment_type == "pingback" || ereg("<pingback />", $comment->comment_content) || ereg("<trackback />", $comment->comment_content)) { ?>
  <?php if (!$runonce) { $runonce = true; ?>
	<br /> <br />
  <h2 class="comments">Trackbacks &amp; Pingbacks</h2>
  <?php } ?>
  <a name="comment-<?php comment_ID() ?>"></a>
  <ul class="trackbacklist" style="margin-bottom: 10px; padding-top: 10px;">
    <li>
      <?php comment_type(__('Comment'), __('Trackback'), __('Pingback')); ?>
      <?php _e('by'); ?>
      <strong>
      <?php comment_author_link() ?>
      </strong> on
      <?php comment_date() ?>
      @ <a href="#comment-<?php comment_ID() ?>">
      <?php comment_time() ?>
      </a>
      <?php edit_comment_link(__("Edit This"), ' | '); ?>
    </li>
  </ul>
  <?php } ?>
  <?php endforeach; ?>
  <?php if ($runonce) { ?>
</div>
<?php } else { ?>
</div>
<?php } ?>
<?php // End Trackbacks ?>
<br />

<?php // Begin Comments ?>
<a name="comments"></a>
<h2 class="comments" style="margin-bottom: 10px;">Comments</h2>
<div id="commentlist">
  <?php foreach ($comments as $comment) : ?>
  <?php if ($comment->comment_type != "trackback" && $comment->comment_type != "pingback" && !ereg("<pingback />", $comment->comment_content) && !ereg("<trackback />", $comment->comment_content)) { ?>
  <a name="comment-<?php comment_ID() ?>"></a>
  <div class="<?php if ( $comment->comment_author_email == get_the_author_email() ) echo 'commetmainauthor'; else echo 'commetmain' ?>" id="comment-<?php comment_ID() ?>">
    <div class="commentsh"> 
    	<b><?php comment_author_link() ?></b> 
        <br /><span class="commentsd"><?php comment_date() ?></span>
		<a href="#comment-<?php comment_ID() ?>"></a><br />
		<?php edit_comment_link(__("Edit This"), ''); ?>
    </div>
    
    <!--comment left-->
    <div class="comment_right" style="border-bottom: 1px solid #CCCCCC; margin-bottom: 10px; padding-top: 10px;">
      <div class="commentsb">
        <?php if (function_exists('gravatar')) { ?>
        <img src="<?php gravatar("R", 28); ?>" alt="" class="gravatar"/>
        <?php } ?>
        <?php comment_text() ?>
      </div>
    </div>
    <!--comment right-->
  </div>
  <?php } ?>
  <?php endforeach; ?>
</div>
<?php // End Comments ?>
<?php else : // If there are no comments yet ?>
<br />
<br />
<p class="meta">
  <?php _e('No comments yet.'); ?>
</p>
</div>
<?php endif; ?>

<p style="padding: 5px; border: 1px solid #090; background:#EAFECF; text-align: center;">
	<?php comments_rss_link(__('<abbr title="Really Simple Syndication">RSS</abbr> feed for comments on this post.')); ?> 
	<?php if ( pings_open() ) : ?>
		<a href="<?php trackback_url() ?>" rel="trackback"><?php _e('TrackBack <abbr title="Uniform Resource Identifier">URI</abbr>'); ?></a>
	<?php endif; ?>
</p>

<?php if ( comments_open() ) : ?>
<h2 class="comments"><?php _e('Leave a reply'); ?></h2>
<form action="<?php echo get_settings('siteurl'); ?>/wp-comments-post.php" method="post" id="form-contact">
	<?php if ( $user_ID ) : ?>
    <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>
    <?php else : ?>
        <p>
        	<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="28" tabindex="1" class="fields"/>
        	<label for="author" class="texts"><?php _e('Name'); ?>  <?php if ($req) _e('(required)'); ?></label>    
        </p>
        <p>
        	<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="28" tabindex="2" class="fields"/>
        	<label for="email" class="texts"><?php _e('E-mail'); ?> <?php if ($req) _e('(required)'); ?></label>
        </p>
        <p>
        	<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="28" tabindex="3" class="fields"/>
            <label for="url" class="texts"><?php _e('<acronym title="Uniform Resource Identifier">Website</acronym>'); ?></label>
        </p>
	<?php endif; ?>
		<label for="comment" class="clear texts">  <?php _e('Your Message'); ?> </label>
        <p>
        	<textarea name="comment" id="comment" cols="60" rows="10" tabindex="4" class="fields" style="margin: 10px 0px; width: 500px;"></textarea>
        </p>
        <p>
			<input name="submit" id="submit" type="submit" tabindex="5" value="<?php _e('Add Comment'); ?>" class="submit" />
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			<input type="hidden" name="redirect_to" value="<?php echo wp_specialchars($_SERVER['REQUEST_URI']); ?>" />
        </p>
    	<?php do_action('comment_form', $post->ID); ?>
</form>
<?php else : // Comments are closed ?>
	<p><?php _e('Sorry, the comment form is closed at this time.'); ?></p>
<?php endif; ?>