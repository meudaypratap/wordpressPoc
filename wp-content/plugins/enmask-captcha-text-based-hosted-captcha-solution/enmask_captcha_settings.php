<?php
    if (defined('ENMASK_CAPTCHA_INCLUDES') === false){
    	die('no direct access please.');
	}
	
	//post submit works
	if(isset($_POST['save_enmask_options']) && $_POST['save_enmask_options']!=''){
		if(isset($_POST['enmask_captcha_comments_form'])){
			$enmask_captcha_comments_form='1';
		}else{
			$enmask_captcha_comments_form='0';
		}
		
		if(isset($_POST['enmask_captcha_registration_form'])){
			$enmask_captcha_registration_form='1';
		}else{
			$enmask_captcha_registration_form='0';
		}
		
		if(isset($_POST['enmask_captcha_show_for_loggedin'])){
			$enmask_captcha_show_for_loggedin='1';
		}else{
			$enmask_captcha_show_for_loggedin='0';
		}
		
		if(isset($_POST['enmask_captcha_show_for_lostpassword'])){
			$enmask_captcha_show_for_lostpassword='1';
		}else{
			$enmask_captcha_show_for_lostpassword='0';
		}
		
		if(isset($_POST['enmask_captcha_show_for_login'])){
			$enmask_captcha_show_for_login='1';
		}else{
			$enmask_captcha_show_for_login='0';
		}
		
		//updating for comment form
		$option_name = 'enmask_captcha_comments_form';
		$newvalue = $enmask_captcha_comments_form;
		
		if ( get_option( $option_name ) != $newvalue ) {
			update_option( $option_name, $newvalue );
		} else {
			$deprecated = ' ';
			$autoload = 'no';
			add_option( $option_name, $newvalue, $deprecated, $autoload );
		}
		
		//updating for registration form
		$option_name = 'enmask_captcha_registration_form';
		$newvalue = $enmask_captcha_registration_form;
		
		if ( get_option( $option_name ) != $newvalue ) {
			update_option( $option_name, $newvalue );
		} else {
			$deprecated = ' ';
			$autoload = 'no';
			add_option( $option_name, $newvalue, $deprecated, $autoload );
		}
		
		//updating for showing in logged in form
		$option_name = 'enmask_captcha_show_for_loggedin';
		$newvalue = $enmask_captcha_show_for_loggedin;
		
		if ( get_option( $option_name ) != $newvalue ) {
			update_option( $option_name, $newvalue );
		} else {
			$deprecated = ' ';
			$autoload = 'no';
			add_option( $option_name, $newvalue, $deprecated, $autoload );
		}
		
		
		//updating for showing in lost password form
		$option_name = 'enmask_captcha_show_for_lostpassword';
		$newvalue = $enmask_captcha_show_for_lostpassword;
		
		if ( get_option( $option_name ) != $newvalue ) {
			update_option( $option_name, $newvalue );
		} else {
			$deprecated = ' ';
			$autoload = 'no';
			add_option( $option_name, $newvalue, $deprecated, $autoload );
		}
		
		
		//updating for showing in login form
		$option_name = 'enmask_captcha_show_for_login';
		$newvalue = $enmask_captcha_show_for_login;
		
		if ( get_option( $option_name ) != $newvalue ) {
			update_option( $option_name, $newvalue );
		} else {
			$deprecated = ' ';
			$autoload = 'no';
			add_option( $option_name, $newvalue, $deprecated, $autoload );
		}
		
		//redirection code goes here.
		echo "<script>document.location='admin.php?page=enmask-captcha-settings';</script>";
		die(__('Please enable javascript on your browser.','wp_enmask'));
	}//end of post function...
	
	$enmask_captcha_comments_form=get_option('enmask_captcha_comments_form');
	$enmask_captcha_registration_form=get_option('enmask_captcha_registration_form');
	$enmask_captcha_show_for_loggedin=get_option('enmask_captcha_show_for_loggedin');
	$enmask_captcha_show_for_lostpassword=get_option('enmask_captcha_show_for_lostpassword');
	$enmask_captcha_show_for_login=get_option('enmask_captcha_show_for_login');
?>

<div class="wrap">
   <h2><?php _e('Enmask Captcha Settings','wp_enmask');?></h2>
   <p><?php _e('EnMask is founded with the ideas of helping people control their online content, privacy and freedom. For the detail information please ','wp_enmask');?><a href="http://www.enmask.com" target="_blank"><?php _e('click here','wp_enmask');?></a></p>
   
   <form method="post" action="" name="frmenmaskcaptcha" id="frmenmaskcaptcha">
      <h3><?php _e('Activation options','wp_enmask');?></h3>
      <table class="form-table">
         <tr valign="top">
            <td>
               <input type="checkbox" id ="enmask_captcha_comments_form" name="enmask_captcha_comments_form" value="1" <?php echo ($enmask_captcha_comments_form=='1')?"checked=\"checked\"":""?> />
               <label for="enmask_captcha_comments_form"><?php _e('Enable for comment forms','wp_enmask');?></label>
            </td>
         </tr>
         
         <tr valign="top">
            <td>
               <input type="checkbox" id ="enmask_captcha_registration_form" name="enmask_captcha_registration_form" value="1" <?php echo ($enmask_captcha_registration_form=='1')?"checked=\"checked\"":""?> />
               <label for="enmask_captcha_registration_form"><?php _e('Enable for registration forms','wp_enmask');?></label>
            </td>
         </tr>
         
         <tr valign="top">
            <td>
               <input type="checkbox" id ="enmask_captcha_show_for_loggedin" name="enmask_captcha_show_for_loggedin" value="1" <?php echo ($enmask_captcha_show_for_loggedin=='1')?"checked=\"checked\"":""?> />
               <label for="enmask_captcha_show_for_loggedin"><?php _e('Enable for logged in users','wp_enmask');?></label>
            </td>
         </tr>
         
         <tr valign="top">
            <td>
               <input type="checkbox" id ="enmask_captcha_show_for_lostpassword" name="enmask_captcha_show_for_lostpassword" value="1" <?php echo ($enmask_captcha_show_for_lostpassword=='1')?"checked=\"checked\"":""?> />
               <label for="enmask_captcha_show_for_lostpassword"><?php _e('Enable for lost password','wp_enmask');?></label></td>
         </tr>
         
         <tr valign="top">
            <td>
               <input type="checkbox" id ="enmask_captcha_show_for_login" name="enmask_captcha_show_for_login" value="1" <?php echo ($enmask_captcha_show_for_login=='1')?"checked=\"checked\"":""?> />
               <label for="enmask_captcha_show_for_login"><?php _e('Enable for login form','wp_enmask');?></label></td>
         </tr>
      </table>
      
     <p class="submit"><input type="submit" name="save_enmask_options" class="button-primary" title="<?php _e('Save enmask Options','wp_enmask');?>" value="<?php _e('Save enmask Changes','wp_enmask');?> &raquo;" /></p>
   </form>   
</div>