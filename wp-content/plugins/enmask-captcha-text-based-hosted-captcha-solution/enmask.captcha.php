<?php
/**
* class name: EnmaskCaptcha
* Author: enmask.com
**/

class EnmaskCaptcha {
    private $protocol;
    private $server;
    private $port;

    public function EnmaskCaptcha()
    {
        $this->protocol = "http://";
        $this->server = "enmask.com/";
        $this->port = "";
    } 

    public function getHtml($name)
    {
		$wp_lang=get_bloginfo('language');
		if($wp_lang!=''){
			$js_append='data-enmask-langcode="'.$wp_lang.'"';
		}else{
			$js_append='';
		}
        $this->protocol = "http://";
        $url = $this->protocol . $this->server . $this->port . "/Scripts/Enmask.Captcha.js";
        return '<script type="text/javascript" '.$js_append.' src="' . $url . '" data-enmask="true" data-enmask-name="' . $name . '"></script>';
    } 

    public function validate($captchaResponse, $captchaChallenge)
    {
        $this->protocol = "http://";

        $url = $this->protocol . $this->server . $this->port . "/CaptchaFont/ValidateCaptcha";
        $encoded = urlencode('response') . '=' . urlencode($captchaResponse) . '&';
        $encoded .= urlencode('challenge') . '=' . urlencode($captchaChallenge);

        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $encoded);
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        //curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        $buffer = curl_exec($curl_handle);
        curl_close($curl_handle);
        $result = json_decode($buffer);
		
        return array($result->isValid, __("Captcha was not valid.", "wp_enmask"));
    } 
}