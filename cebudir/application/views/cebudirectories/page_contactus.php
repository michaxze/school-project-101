<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<?php require_once('header.php'); ?>    

    <div id="cd-content">
    	<?php if(isset($_GET['status'])) { ?>
			<h1 style="text-align: center;">Thank You for sending Cebu Directories an inquiry! 
				We will get back to you about your concern within 48-hours.</h1>
                
            <p>
            Cebu Directories would be glad to hear any messages, comments, suggestions
            from our valued clients that may help improve our services. You may contact
            us by sending us an email to  michael@cebudirectories.com
            </p>
		<?php } else { ?>
        
    	<h1>Contact Cebu Directories</h1>
    	<p>
    	Cebu Directories would be glad to hear any messages, comments, suggestions
        from our valued clients that may help improve our services. You may contact
        us by sending us an email to  michael@cebudirectories.com
        </p>

		<p>We will get back to you about your concern within 48-hours.</p>

		<p>You may also you use the contact form below. </p>
        
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
