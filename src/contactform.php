<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['mail'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = "EMAIL ADRES";
  $headers = "Van: ".$mailFrom;
  $txt = "U hebt een e-mail ontvangen van " .$name.".\n\n".$message;
  
  mail($mailTo, $subject, $txt, $headers);
  header("Location: emailsent.php");
}