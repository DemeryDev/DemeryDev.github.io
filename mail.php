<?php


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$textarea = $_POST['textarea']
$to = "demerydev@gmail.com"
$subject = "Mail From Profile"


$header = "From:".$name. "\r\n"

%txt = "You have recived an e-mail from ".$name. "\r\nEmail: " .$email ."\r\n Message: ". $Message ."\r\n TextArea: " .$textarea;

if($email!=null){
  mail($to, $subject, $txt, $header);
}


?>