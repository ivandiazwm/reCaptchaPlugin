<?php $query = $api->get_extra('recaptcha', 'plugin', 'reCaptchaPlugin');
$recaptcha = array();
while($register = mysqli_fetch_array($query)){
	$recaptcha[$register[name]] = $register[value];
}
?>
<script type="text/javascript">
 var RecaptchaOptions = {
    theme : '<?php echo $recaptcha[theme]; ?>'
 };
</script>