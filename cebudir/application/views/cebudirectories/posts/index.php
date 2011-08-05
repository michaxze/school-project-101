<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<?php

if(count($posts) == 1) {
   $description = strip_tags($posts[0]['content']);
   $description = str_replace(array("\n","\t","\r","<br/>","<br />"), " ", $description);
   $description = htmlentities(trim($description));
   
   $ptitle = $posts[0]['title'];
   $ptype = 'cebudirectories:posts';
   $pimage = $posts[0]['primary_image'];
   //echo $posts[0]['primary_image'];
}
?>
<?php require_once(APPPATH . 'views/cebudirectories/header.php'); ?>
<?php 
$url = "http://" . $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
?>
<?php foreach($posts as $p) { ?>
    <div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=224390210914276&amp;xfbml=1"></script><fb:like href="<?php echo $url;?>" send="true" layout="button_count" width="450" show_faces="true" action="recommend" font=""></fb:like>
    <div class="posts">
        <h1 class="ptitle"><a href="<?php echo $p['url']; ?>" title="<?php echo $p['title']; ?>"><?php echo $p['title']; ?></a></h1>
        <?php echo $p['content']; ?>
    </div>
<?php } ?>
<?php

?>
<?php require_once(APPPATH . '/views/cebudirectories/footer.php'); ?>