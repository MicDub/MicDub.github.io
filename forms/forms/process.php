<?php
include("global.inc.php");
$errors=0;
$error="The following errors occured while processing your form input.<ul>";
pt_register('POST','kjl');
pt_register('POST','jkl');
if($kjl=="" ){
$errors=1;
$error.="<li>You did not enter one or more of the required fields. Please go back and try again.";
}
if($errors==1) echo $error;
else{
$where_form_is="http".($HTTP_SERVER_VARS["HTTPS"]=="on"?"s":"")."://".$SERVER_NAME.strrev(strstr(strrev($PHP_SELF),"/"));
$message="kjl: ".$kjl."
jkl: ".$jkl."
";
$message = stripslashes($message);
mail("mike@dubbeldam.com","Form Submitted at your website",$message,"From: phpFormGenerator");
?>


<!-- This is the content of the Thank you page, be careful while changing it -->

<h2>Thank you!</h2>

<table width=50%>
<tr><td>kjl: </td><td> <?php echo $kjl; ?> </td></tr>
<tr><td>jkl: </td><td> <?php echo $jkl; ?> </td></tr>
</table>
<!-- Do not change anything below this line -->

<?php 
}
?>