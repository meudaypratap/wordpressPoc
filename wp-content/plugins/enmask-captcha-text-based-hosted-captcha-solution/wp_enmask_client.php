<?php
session_start();
require_once('enmask.captcha.php');

$enmask_captcha_comments_form = get_option('enmask_captcha_comments_form');
$enmask_captcha_registration_form = get_option('enmask_captcha_registration_form');
$enmask_captcha_show_for_loggedin = get_option('enmask_captcha_show_for_loggedin');
$enmask_captcha_show_for_lostpassword = get_option('enmask_captcha_show_for_lostpassword');
$enmask_captcha_show_for_login = get_option('enmask_captcha_show_for_login');

/**
 * returns true if captcha is to be shown returns false if captcha is not to be shown.
 */
function show_captcha_for_logged_in()
{
    global $enmask_captcha_comments_form, $enmask_captcha_registration_form, $enmask_captcha_show_for_loggedin;
    if ($enmask_captcha_show_for_loggedin == '') {
        return false;
    } else if ($enmask_captcha_show_for_loggedin == '0' && is_user_logged_in()) {
        return false;
    } else {
        return true;
    } 
} 

function put_enmask_head()
{
    global $enmask_captcha_comments_form, $enmask_captcha_registration_form, $enmask_captcha_show_for_loggedin;

    if(show_captcha_for_logged_in() && $enmask_captcha_comments_form == '1'){
        echo "
		<script type=\"text/javascript\">
		jQuery(function() {
			jQuery('form[action$=\"wp-comments-post.php\"] :submit:eq(0)').remove();
		});	
		</script>
		<noscript>
		</noscript>
		";
    } 

    if (isset($_SESSION['captcha_error']) && isset($_SESSION['enmask_comment']) && $_SESSION['enmask_comment'] != '') {
        echo "<script type=\"text/javascript\">
		var enmask_comment='" . $_SESSION['enmask_comment'] . "';
		jQuery(function() {
			jQuery('#comment').val(enmask_comment);
		});
		</script>";
    } 
} 

function init_enmask()
{
    wp_enqueue_script('jquery');
	load_plugin_textdomain( 'wp_enmask', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
} 

function get_captcha($echo)
{
    $enmask_captcha = new EnmaskCaptcha();

    if ($echo) {
        echo $enmask_captcha->getHtml('myCaptcha');
    } else {
        return $enmask_captcha->getHtml('myCaptcha');
    } 
} 

function show_enmak_in_comments()
{ 
    // skip the captcha if user is logged in and the settings allow
    if (show_captcha_for_logged_in()) {
        $show_data = get_captcha(false); 
        // echo "bivek:".$_SESSION['enmask_comment'];die();
        if (isset($_SESSION['captcha_error']) && isset($_SESSION['enmask_comment']) && $_SESSION['enmask_comment'] != '') {
            $enmask_output = '<p id="enmask_captcha_error" style="color:#ff0000;">'.__('You have entered the wrong CAPTCHA phrase.','wp_enmask').'</p>';
            unset($_SESSION['captcha_error'], $_SESSION['enmask_comment']);
        } 
        echo $enmask_output . $show_data . "<div style='padding-top:10px;'><input type='submit' value='".__('Post Comment','wp_enmask')."' id='submit-alt' name='submit' tabindex='6' /></div>";
    } else {
        return true;
    } 
} 

function check_enmask_comment($comment_data)
{ 
    //skip the captcha if user is logged in and the settings allow
    if (!show_captcha_for_logged_in()) {
        return $comment_data;
    } 
	
	//Skip captcha for trackback or pingback
    if ($comment_data['comment_type'] != '' && $comment_data['comment_type'] != 'comment'){
		die();
		return $comment;
    }

    $enmask_captcha = new EnmaskCaptcha();

    $captchaChallenge = trim($_POST['myCaptcha_challenge']);
    $captchaResponse = trim($_POST['myCaptcha']);
    $comment = trim($_POST['comment']);

    list($isValid, $message) = $enmask_captcha->validate($captchaResponse, $captchaChallenge);

    if ($isValid) {
        return $comment_data;
    } else {
        $_SESSION['enmask_comment'] = $comment;
        $_SESSION['captcha_error'] = __('Invalid CAPTCHA phrase','wp_enmask');
        // redirection code to be written
        add_filter('pre_comment_approved', create_function('$enmask', 'return \'spam\';'));
        return $comment_data;
        // wp_die( __('Error: You have entered the wrong CAPTCHA phrase. Please click your browser\'s back button and try again.'));
    } 
} 

function relative_enmask_redirect($location,$comment_data)
{
	if (isset($_SESSION['captcha_error']) && isset($_SESSION['enmask_comment']) && $_SESSION['enmask_comment'] != '') {
		wp_delete_comment($comment_data->comment_ID);
        return preg_replace("/#comment-([\d]+)/", "#enmask_captcha_error", $location);
    } else {
        return $location;
    } 
} 
// show enmask captcha while registration
function show_enmask_in_registration()
{
    $enmask_captcha = new EnmaskCaptcha();
    echo $enmask_captcha->getHtml('myCaptchaReg');
} 
// validate enmask captcha after registration information is filled
function validate_enmask_response($errors)
{
    $enmask_captcha = new EnmaskCaptcha();

    if (empty($_POST['myCaptchaReg']) || $_POST['myCaptchaReg'] == '') {
		$errors->add('blank_captcha', '<strong>'.__('ERROR','wp_enmask').'</strong>: '. __('You have entered blank CAPTCHA phrase.','wp_enmask'));
        return $errors;
    } 

    $captchaChallenge = trim($_POST['myCaptchaReg_challenge']);
    $captchaResponse = trim($_POST['myCaptchaReg']);

    list($isValid, $message) = $enmask_captcha->validate($captchaResponse, $captchaChallenge);

    if (!$isValid) {
		$errors->add('captcha_wrong', '<strong>'.__('ERROR','wp_enmask').'</strong>: '. __('You have entered the wrong CAPTCHA phrase.','wp_enmask'));
    } 
    return $errors;
} 


/**
*	For changing the width of the login form.
*/
/*function reg_form_style()
{
    $width = 360;

    global $enmask_captcha_comments_form, $enmask_captcha_registration_form, $enmask_captcha_show_for_loggedin;

    echo "
	<script type=\"text/javascript\">
	window.onload = function() {
		document.getElementById('login').style.width = '{$width}px';
	};
	</script>";
}
*/

/**
*	For showing in forgot password page
*/
function enmask_register_form(){
	$enmask_captcha = new EnmaskCaptcha();
    echo $enmask_captcha->getHtml('myCaptchaPassword');
	return true;
}

/**
*	For doing post processing of forgot password page.
*/
function enmask_lostpassword_post(){
	//skip the captcha if user is logged in and the settings allow
    if (!show_captcha_for_logged_in()){
        return true;
    }

    $enmask_captcha = new EnmaskCaptcha();

    $captchaChallenge = trim($_POST['myCaptchaPassword_challenge']);
    $captchaResponse = trim($_POST['myCaptchaPassword']);

    list($isValid, $message) = $enmask_captcha->validate($captchaResponse, $captchaChallenge);
    
	if ($isValid) {
        return true;
    }else{
		wp_die( '<strong>'.__('ERROR','wp_enmask').'</strong>: '.  __('You have entered the wrong CAPTCHA phrase. Press your browser\'s back button and try again.','wp_enmask'));
    }
}

/**
*	For showing captcha in admin login form
*/

function enmask_login_form(){
	$enmask_captcha = new EnmaskCaptcha();
    echo $enmask_captcha->getHtml('myCaptchaLoginForm');
	return true;
}

/**
*	Authentication of captcha in admin login form
*/

function enmask_authenticate($user=null, $username=null, $password=null)
{
	$error = new WP_Error();
	
	if (isset($_POST['myCaptchaLoginForm']) && empty($_POST['myCaptchaLoginForm'])) {
		remove_filter('authenticate', 'enmask_authenticate');
		$error->add('empty_captcha', '<strong>' . __('ERROR','wp_enmask') . '</strong>: ' . __('You have entered blank CAPTCHA phrase.','wp_enmask'));
		return $error;
	}else if(isset($_POST['myCaptchaLoginForm'])){
	
	$enmask_captcha = new EnmaskCaptcha();
	
	$captchaChallenge = trim($_POST['myCaptchaLoginForm_challenge']);
    $captchaResponse = trim($_POST['myCaptchaLoginForm']);

    list($isValid, $message) = $enmask_captcha->validate($captchaResponse, $captchaChallenge);
    
	if ($isValid) {
        //its okay 
    }else{
		remove_filter('authenticate', 'enmask_authenticate');
		$error->add('wrong_captcha', '<strong>' . __('ERROR','wp_enmask','wp_enmask') . '</strong>: ' . __('You have entered the wrong CAPTCHA phrase.','wp_enmask'));
		return $error;
    }}
}

add_action('init', 'init_enmask');
add_action('wp_head', 'put_enmask_head');

// only register the hooks if the user wants enmask on the comment page.
if ($enmask_captcha_comments_form == '1') {
    add_action('comment_form', 'show_enmak_in_comments', 0); //showing captcha in form
	add_action('preprocess_comment', 'check_enmask_comment', 0); //post processing
	
    // for redirection after commenting... useful if the captcha is entered incorrectly
    add_action('comment_post_redirect', 'relative_enmask_redirect', 0,2);
} 

// only register the hooks if the user wants enmask captcha on the registration page
if ($enmask_captcha_registration_form == '1') {
    // registration form works
    add_action('register_form', 'show_enmask_in_registration'); 
    // post registration works
    add_filter('registration_errors', 'validate_enmask_response'); 
    // formatting of enmask box design
    //add_action('login_head', 'reg_form_style');
} 

// show captcha in forgot password
if ($enmask_captcha_show_for_lostpassword=='1') {
    add_action('lostpassword_form','enmask_register_form',0);
    add_action('lostpassword_post','enmask_lostpassword_post',0);
	
	// formatting of enmask forgot password box design
    //add_action('login_head', 'reg_form_style');
}

// show captcha in admin login form
if($enmask_captcha_show_for_login=='1'){
	//show captcha in login form
    add_action('login_form', 'enmask_login_form');
	
	//authenticate
	add_filter('authenticate', 'enmask_authenticate',10,3);
	
	// formatting of enmask forgot password box design
    //add_action('login_head', 'reg_form_style');
} 

?>