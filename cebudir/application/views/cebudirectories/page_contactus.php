<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<?php require_once('header.php'); ?>    

    <div id="cd-content">
    	<?php if(isset($status)) { ?>
			<h1 style="text-align: center;">
You have successfully sent a message to info@cebudirectories.com. We will be sending you a feedback shortly.
Thank you for taking interest in Cebu Directories.
</h1>
                
		<?php } else { ?>
        
    	<h1>Contact Cebu Directories</h1>
    	<p class="medium">
      	Your questions, comments, and suggestions are most welcome.  Send them to  <a href="mailto:info@cebudirectories.com" title="Mail Us">info@cebudirectories.com</a> or you may use the contact form below. 
      </p> 
    	  
        
        <?php
			$req = '&nbsp;&nbsp;<img src="' . url::base() . 'images/star.gif" alt="(required)" align="top"/>';
			
			echo form::open("home/contact_send", array('method' => 'post', 'id' => 'form-contact'));
			echo form::label('Name') . '<br />';
			echo form::input('fname','') . $req . '<br />';
			echo form::label('Address') . '<br />';
			echo form::input('faddress','') . $req . '<br />';
			echo form::label('Email') . '<br />';
			echo form::input('femail','') . $req . '<br />';
			echo form::label('Type') . '<br />';
			echo form::dropdown('ftype',$ctypes,'standard') . '<br />';
			echo form::label('Message') . '<br />';
			echo form::textarea(array('name' => 'fmessage',
									  'id' => 'fmessage',
									  'cols' => 20,
									  'row' => 5)) .  $req . '<br />';
			echo form::button(array('type' => 'submit',
									'value' => 'Alright!',
									'class' => 'submit'));
		}
		
		?>
    </div>

<?php require_once('footer.php'); ?>
