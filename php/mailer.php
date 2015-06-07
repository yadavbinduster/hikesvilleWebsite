<<<<<<< Updated upstream
<?php
if(isset($_POST['submit'])) {
$to = "yadavbinduster@gmail.com";
$subject = $_POST['subject'];
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$message = $_POST['message'];
 
//$body = "From: $name_field\n E-Mail: $email_field\n Message:\n $message";
$body = $_POST['message'];
 
echo "Data has been submitted to $to!";
mail($to, $subject, $body);
} else {
echo "blarg!";
=======
<?php ini_set("include_path",'/home/hikesv5/php:'. ini_get("include_path"));

if(isset($_POST['submit'])) {
	$to = "shamanth.bn@hikesville.com";
	$cc = "arun.purushothaman@hikesville.com";
	$subject = $_POST['subject'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$xheaders = "";
	$xheaders .= "From: $name <$email>\n";
	$xheaders .= "X-Sender: <$email>\n";
	$xheaders .= "X-Mailer: PHP\n"; // mailer
	$xheaders .= "X-Priority: 1\n"; //1 Urgent Message, 3 Normal
	$xheaders .= "Content-Type:text/html; charset=\"iso-8859-1\"\n";
	$xheaders .= "Cc: $cc\n";
 
	$body = "$name ($email) has sent you the following message : \n \n $message";
 
	echo "Your message has been submitted. Thanks for your message!";
	mail($to, $subject, $body, $xheaders);
} else {
	echo "blarg!";
>>>>>>> Stashed changes
}
?>