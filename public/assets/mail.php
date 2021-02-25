<?php
if(isset($_REQUEST['n1']))
{
$name=$_REQUEST['n1'];
$phone=$_REQUEST['n2'];
$email=$_REQUEST['n3'];
$msg=$_REQUEST['n4'];


//echo $name,$phone,$email,$date;
//sending to mail

$to      = 'example@gmail.com';  //add your email id
$subject = 'Air Conditioning/Message';  // add mail subject


$message = "Name:".$name.
            "\nPhone:".$phone.
            "\nE-mail: ".$email.
             "\nMessage: ".$msg;

$headers = "Reply-To: $email \r\n";

if(mail($to, $subject, $message,$headers))
{

    header("location:index.html");

}

} 


?>