<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<?php require_once('header.php'); ?>
	<script type="text/javascript">
        $(document).ready(function(){
            $("#form-signup input[type=text]").focus(function(){
                //$(this).parent().find(".error").css("display", "none");
				id = this.id;
				if(id == "telno_areacode" || id == "telno" || id == "faxno_areacode"
				   	|| id == "faxno" || id == "mobile_network" || id == "mobileno" ) { 
					$(this).parent().find(".info").css("margin-left", "210px");
				}
				$(this).parent().find(".info").animate({opacity: 'toggle'}, 250);
            }).blur(function(){
				$(this).parent().find(".info").animate({opacity: 'hide'}, 450);
            });
			
			$("#form-signup textarea").focus(function(){
                $(this).parent().find(".error").css("display", "none");
				$(this).parent().find(".info").animate({opacity: 'toggle'}, 200);
				$(this).parent().find(".info").css("margin-top", "-148px");
            }).blur(function(){
				$(this).parent().find(".info").animate({opacity: 'hide'}, 450);
            });
        });
        
      
    </script>
    <div id="cd-content">
      <?php if ($submitted) { ?>
        <h1>You have successfully signed up. Thank you for signing up.</h1>
      <?php } else { ?>
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
          <table class="left" width="600" border="0">
          	<tr>
            	<td colspan="2"><h3 style="border-bottom: 2px solid #999999;">You're just 60 seconds away from your Cebu Directories account.</h3><br/></td>
            </tr>
            <tr>
              <td colspan="2"><h3 style="color: #6D8309;"><img src="<?php echo url::base(); ?>images/signup-one.png" align="absmiddle"/> Business Details</h3></td>
            </tr>
            <tr>
              <td width="100"><?php print form::label('business_name', 'Business Name' );?> </td>
              <td ><?php print form::input('business_name') . $req;?>
              		<div class="help-tooltip info">Minimum 4 characters, maximum 15 characters. This is your handle on Digg so don't make it too personal.</div>
              </td>
            </tr>
            <tr>
              <td ><?php print form::label('business_desc', 'Business Description' );?> </td>
              <td ><?php print form::textarea('business_desc') . $req;?>
              		<div class="help-tooltip info">Minimum 4 characters, maximum 15 characters. This is your handle on Digg so don't make it too personal.</div>
              </td>
            </tr>
            <tr>
              <td><?php print form::label('business_street', 'Street / Barangay' );?></td>
              <td><?php print form::input('business_street') . $req;?>
              		<div class="help-tooltip info">Minimum 4 characters, maximum 15 characters. This is your handle on Digg so don't make it too personal.</div>
              </td>
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
                <?php print form::input('telno','',"maxlength=7 style=\"width:75px;\"") ;?>
              		<div class="help-tooltip info">Minimum 4 characters, maximum 15 characters. This is your handle on Digg so don't make it too personal.</div>  
              </td>
            </tr>
            <tr>
              <td><?php print form::label('faxno', 'Fax No.' );?></td>
              <td><span style="font-size:16px; padding-right:6px;">+63</span><?php print form::input('faxno_areacode','',"maxlength=3 style=\"width:35px\"");?>
                <?php print form::input('faxno','',"maxlength=7 style=\"width:75px;\"") ;?>
              		<div class="help-tooltip info">Minimum 4 characters, maximum 15 characters. This is your handle on Digg so don't make it too personal.</div>  
              </td>
            </tr>
            <tr>
              <td><?php print form::label('mobileno', 'Mobile No.' );?></td>
              <td><span style="font-size:16px; padding-right:6px;">+63</span><?php print form::input('mobileno_network','',"maxlength=3 style=\"width:35px\"");?>
                <?php print form::input('mobileno','',"maxlength=7 style=\"width:75px;\"") ;?>
              		<div class="help-tooltip info">Minimum 4 characters, maximum 15 characters. This is your handle on Digg so don't make it too personal.</div>  
              </td>
            </tr>
            <tr>
              <td><?php print form::label('email', 'Email Address' );?></td>
              <td><?php print form::input('email') . $req;?>
              		<div class="help-tooltip info">Minimum 4 characters, maximum 15 characters. This is your handle on Digg so don't make it too personal.</div>
              </td>
            </tr>
            <tr>
              <td><?php print form::label('website', 'Website' );?></td>
              <td><?php print form::input('website') ;?>
              		<div class="help-tooltip info">Minimum 4 characters, maximum 15 characters. This is your handle on Digg so don't make it too personal.</div>
              </td>
            </tr>
            <!-- Social Media Section -->
            <tr>
              <td colspan="2"><h3 style="color: #6D8309;"><img src="<?php echo url::base(); ?>images/signup-two.png" align="absmiddle"/> Social Media Links</h3></td>
            </tr>
            <tr>
              <td><?php print form::label('twitter_link', 'Twitter Link' );?></td>
              <td><?php print form::input('twitter_link') ;?>
              		<div class="help-tooltip info">Minimum 4 characters, maximum 15 characters. This is your handle on Digg so don't make it too personal.</div>
              </td>
            </tr>
            <tr>
              <td><?php print form::label('facebook_link', 'Facebook Link' );?></td>
              <td><?php print form::input('facebook_link') ;?>
              		<div class="help-tooltip info">Minimum 4 characters, maximum 15 characters. This is your handle on Digg so don't make it too personal.</div>
              </td>
            </tr>
            <tr>
              <td><?php print form::label('yahoo_id', 'Yahoo ID' );?></td>
              <td><?php print form::input('yahoo_id') ;?>
              		<div class="help-tooltip info">Minimum 4 characters, maximum 15 characters. This is your handle on Digg so don't make it too personal.</div>
              </td>
            </tr>
            <tr>
              <td><?php print form::label('skype_id', 'Skype ID' );?></td>
              <td><?php print form::input('skype_id') ;?>
              		<div class="help-tooltip info">Minimum 4 characters, maximum 15 characters. This is your handle on Digg so don't make it too personal.</div>
              </td>
            </tr>
            <tr>
              <td colspan="2"><h3 style="color: #6D8309;"><img src="<?php echo url::base(); ?>images/signup-three.png" align="absmiddle"/> Billing Information</h3></td>
            </tr>
            <tr>
              <td><?php print form::label('billing_type', 'Payment Option' );?></td>
              <td><?php print form::dropdown('area',$provinces, 'standard');?></td>
            </tr>
            <tr>
              <td></td>
              <td>&nbsp;<img src="<?php echo url::base(); ?>images/payment-options.jpg" /></td>
            </tr>
            <tr>
              <td><?php print form::label('billing_name', 'Billing Name' );?></td>
              <td><?php print form::input('billing_name') ;?>
              		<div class="help-tooltip info">Minimum 4 characters, maximum 15 characters. This is your handle on Digg so don't make it too personal.</div>
              </td>
            </tr>
            <tr>
              <td><?php print form::label('billing_address', 'Billing Address' );?></td>
              <td><?php print form::input('billing_address') ;?>
              		<div class="help-tooltip info">Minimum 4 characters, maximum 15 characters. This is your handle on Digg so don't make it too personal.</div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td><?php print form::button(array('type' => 'submit', 'value' => ' ', 'class' => 'create-account')); ?></td>
            </tr>
          </table>
          <div class="left" style="width: 320px; margin-left: 10px;">
          		<img src="<?php echo url::base(); ?>images/signup-banner.png"/><br /><br />
                <img src="<?php echo url::base(); ?>images/signup-benefits.png"/>
                
          </div>
          <div class="clear"></div>
      </div>
      </form>
    <?php } ?>

    </div>

<?php require_once('footer.php'); ?>
