<?php
if($recaptcha['isactive'] == '1' && ($_GET[mode] == 'create_user' || $_GET[mode] == 'create_ticket')){
?>
<div id="recaptchadiv">
	<div class="form-div">
		<div class="ntext">Captcha</div>
	</div>
	<script type="text/javascript" src="http://www.google.com/recaptcha/api/challenge?k=<?php echo $recaptcha['publickey']; ?>"></script>
  <noscript>
     <iframe src="http://www.google.com/recaptcha/api/noscript?k=<?php echo $recaptcha['publickey']; ?>"
         height="300" width="500" frameborder="0"></iframe><br>
     <textarea name="recaptcha_challenge_field" rows="3" cols="40">
     </textarea>
     <input type="hidden" name="recaptcha_response_field"
         value="manual_challenge">
  </noscript>
</div>
<script>
$('#recaptchadiv').appendTo('#<?php echo $_GET[mode]; ?>_form'); 
</script>
<?php } ?>
