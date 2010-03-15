<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<?php require_once('header.php'); ?>


    <div id="cd-content">
      <?php if ($submitted) { ?>
        <h1>You have successfully signed up. Thank you for signing up.</h1>
      <?php } else { ?>
      <h1>You're just 60 seconds away from your Cebudirectories account.</h1>
      <div id="errors">
        <?php
        if (!empty($errors)) {
          echo 'Errors found: <br />';
           foreach ($errors as $key => $val)
           {
               echo " - " . $key.' failed rule '.$val.'<br />';
           }
        }
        ?>
      </div>
      <?php
      $req = '&nbsp;&nbsp;<img src="' . url::base() . 'images/star.gif" alt="(required)" align="bottom"/>';
      echo form::open("home/signup", array('method' => 'post', 'id' => 'form-signup')) . "\n";
      ?>
      <div id="form">
      <table width="700" border="0">
        <tr>
          <td width="100"><?php print form::label('business_name', 'Business Name' );?> </td>
          <td ><?php print form::input('business_name') . $req;?></td>
        </tr>
        <tr>
          <td ><?php print form::label('business_desc', 'Business Description' );?> </td>
          <td ><?php print form::textarea('business_desc') . $req;?></td>
        </tr>
        <tr>
          <td><?php print form::label('business_street', 'Street / Barangay' );?></td>
          <td><?php print form::input('business_street') . $req;?></td>
        </tr>
        <tr>
          <td><?php print form::label('business_area', 'Area' );?></td>
          <td ><?php print form::dropdown('area',$provinces, 'standard');?></td>
        </tr>
        <tr>
          <td width="112"><?php print form::label('category', 'Category' );?> </td>
          <td width="381"><?php print form::dropdown('category',$categories,'standard');?></td>
        </tr>
        <tr>
          <td><?php print form::label('telno', 'Telephone No.' );?></td>
          <td><span style="font-size:16px; padding-right:6px;">+63</span><?php print form::input('telno_areacode','',"maxlength=3 style=\"width:35px\"");?>
            <?php print form::input('telno','',"maxlength=7 style=\"width:75px;\"") ;?></td>
        </tr>
        <tr>
          <td><?php print form::label('mobileno', 'Mobile No.' );?></td>
          <td><span style="font-size:16px; padding-right:6px;">+63</span><?php print form::input('mobileno_network','',"maxlength=3 style=\"width:35px\"");?>
            <?php print form::input('mobileno','',"maxlength=7 style=\"width:75px;\"") ;?></td>
        </tr>
        <tr>
          <td><?php print form::label('faxno', 'Fax No.' );?></td>
          <td><?php print form::input('faxno') ;?></td>
        </tr>
        <tr>
          <td><?php print form::label('email', 'Email Address' );?></td>
          <td><?php print form::input('email') . $req;?></td>
        </tr>
        <tr>
          <td><?php print form::label('website', 'Website' );?></td>
          <td><?php print form::input('website') ;?></td>
        </tr>
        <tr>
          <td><?php print form::label('twitter_link', 'Twitter Link' );?></td>
          <td><?php print form::input('twitter_link') ;?></td>
        </tr>
        <tr>
          <td><?php print form::label('facebook_link', 'Facebook Link' );?></td>
          <td><?php print form::input('facebook_link') ;?></td>
        </tr>
        <tr>
          <td><?php print form::label('yahoo_id', 'Yahoo ID' );?></td>
          <td><?php print form::input('yahoo_id') ;?></td>
        </tr>
        <tr>
          <td><?php print form::label('skype_id', 'Skype ID' );?></td>
          <td><?php print form::input('skype_id') ;?></td>
        </tr>
        <tr>
          <td></td>
          <td><?php print form::button(array('type' => 'submit', 'value' => 'Submit', 'class' => 'submit')); ?></td>
        </tr>
      </table>
      </div>
      </form>
    <?php } ?>

    </div>

<?php require_once('footer.php'); ?>
