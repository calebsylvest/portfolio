<?php

// CHANGE THE THREE VARIABLES BELOW

$EmailFrom = $_POST['email'];
$EmailTo = "caleb.sylvest@gmail.com";
$Subject = "Contact Form Submission from CalebSylvest.com";

$Name = Trim(stripslashes($_POST['name']));
$Email = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['msg'])); 

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page
// CHANGE THE URL BELOW TO YOUR "THANK YOU" PAGE
if ($success){
  print "<meta http-equiv='refresh' content='0;URL=index.html'>";
}
else{
  print "<meta http-equiv='refresh' content='0;URL=index.html'>";
}
?>