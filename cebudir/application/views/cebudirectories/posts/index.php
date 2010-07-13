<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<?php require_once(APPPATH . 'views/cebudirectories/header.php'); ?>
<?php 
$url = "http://" . $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
?>
<?php foreach($posts as $p) { ?>
    <iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo $url;?>&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=recommend&amp;font=trebuchet+ms&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:30px;" allowTransparency="true"></iframe>
    <div class="posts">
        <h1 class="ptitle"><a href="<?php echo $p['url']; ?>" title="<?php echo $p['title']; ?>"><?php echo $p['title']; ?></a></h1>
        <?php echo $p['content']; ?>
    </div>
<?php } ?>
<?php

?>
<?php require_once(APPPATH . '/views/cebudirectories/footer.php'); ?>
