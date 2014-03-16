<?php
$query = $api->get_extra('recaptcha', 'plugin', 'reCaptchaPlugin');
$recaptcha = array();
while($register = mysqli_fetch_array($query)){
	$recaptcha[$register[name]] = $register[value];
}
?>
<form action="action.php?id=recaptcha" method="post">
		  <table class="formtable">
			    <tr>
			      <td class="tdtext">Public Key</td>
		         <td class="tdform"><input class="input-text" name="publickey" type="text" value="<?php echo $recaptcha['publickey'];?>"/></td>
                </tr>
                <tr>
			      <td class="tdtext">Private Key</td>
		         <td class="tdform"><input class="input-text" name="privatekey" type="text" value="<?php echo $recaptcha['privatekey'];?>"/></td>
                </tr>
                <tr>
			      <td class="tdtext">Theme</td>
		         <td class="tdform"><input class="input-text" name="theme" type="text" value="<?php echo $recaptcha['theme'];?>"/> (red, white, clean or blackglass).</td>
                </tr>
                <tr>
			      <td class="tdtext"><?php echo $TEXT['Activate Plugin'];?></td>
		         <td class="tdform"><input class="input-checkbox2" name="isactive" type="checkbox" <?php if($recaptcha['isactive'] == '1') echo "checked"; ?> /></td>
                </tr>
                <tr>
		         <td cass="tdform">
                 <input type="submit" class="button" value="<?php echo $TEXT['Submit'];?>">
                 </td>
                </tr>
	      </table>
</form>