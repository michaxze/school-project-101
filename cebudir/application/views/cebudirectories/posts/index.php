<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<?php require_once(APPPATH . 'views/cebudirectories/header.php'); ?>

<?php foreach($posts as $p) { ?>
    <div class="posts">
        <h1 class="ptitle"><a href="<?php echo $p['url']; ?>" title="<?php echo $p['title']; ?>"><?php echo $p['title']; ?></a></h1>
        <?php echo $p['content']; ?>
    </div>
<?php } ?>
<?php

?>
<?php require_once(APPPATH . '/views/cebudirectories/footer.php'); ?>