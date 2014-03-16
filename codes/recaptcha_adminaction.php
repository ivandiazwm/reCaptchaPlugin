<?php
if($_GET[id] == 'recaptcha'){
	$publickey = $api->sql_escape($_POST[publickey]);
	$privatekey = $api->sql_escape($_POST[privatekey]);
	$isactive = ($_POST[isactive]) ? '1' : '0';
	$theme = $api->sql_escape($_POST[theme]);
	$api->edit_extra($publickey, 'recaptcha', 'name', 'publickey');
	$api->edit_extra($privatekey, 'recaptcha', 'name', 'privatekey');
	$api->edit_extra($isactive, 'recaptcha', 'name', 'isactive');
	$api->edit_extra($theme, 'recaptcha', 'name', 'theme');
	header('Location: admin_main.php?mode=plugins&submode=listplugins&success=editprop');
	exit;
}
?>