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
}
?>