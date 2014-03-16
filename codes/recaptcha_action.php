<?php
require_once('plugins/reCaptchaPlugin/codes/lib/recaptchalib.php');
$query = $api->get_extra('recaptcha', 'plugin', 'reCaptchaPlugin');
$recaptcha = array();
while($register = mysqli_fetch_array($query)){
	$recaptcha[$register[name]] = $register[value];
}
if($recaptcha['isactive'] == '1' && ($_GET[id] == 'new' && !$DATA[login]) || ($_GET[id] == 'newuser')){
	$resp = recaptcha_check_answer ($recaptcha['privatekey'],
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);
	if(!$resp->is_valid){
		header('Location: index.php?mode=error&why=captcha');
		exit;
	}
}
?>