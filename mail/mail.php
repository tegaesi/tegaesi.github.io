<?
$name = $_POST{'name'};
$email = $_POST{'email'};
$message = $_POST['message'];

$email_message = "";

Name: ".$name.";
Email: ".$email.";
Message: ".$message.";

mail ("esitega@yahoo.com" , "New Message", $email_message);
header("tegaesi.github.io/mail-success.html");
?>