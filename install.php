<?php
$plugin = new PLUGIN("reCaptchaPlugin", "Ivan Diaz", "1.0.0");
$plugin->add_extra('publickey', '', 'recaptcha', '');
$plugin->add_extra('privatekey', '', 'recaptcha', '');
$plugin->add_extra('isactive', '0', 'recaptcha', '');
$plugin->add_extra('theme', 'red', 'recaptcha', '');
$plugin->add_code('index.php', 'codes/recaptcha_div.php', false);
$plugin->add_code('index.php', 'codes/recaptcha_top.php', true);
$plugin->add_code('action.php', 'codes/recaptcha_action.php', true);
$plugin->add_mode('reCaptcha','admin/plugins', 'codes/recaptcha_panel.php');
$plugin->add_code('admin/action.php', 'codes/recaptcha_adminaction.php', false);
$plugin->add_text('Activate Plugin', 'Activate Plugin', 'text', 'en');
$plugin->add_text('Activate Plugin', 'Activar Plugin', 'text', 'es');
$plugin->add_text('Activate Plugin', 'Aktivieren Plugin', 'text', 'de');
?>