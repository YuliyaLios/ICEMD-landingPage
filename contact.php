<?php
if (isset($_POST['submit'])) { 
      $name = $_POST['name'];
      $email = $_POST['email'];
      $ToEmail = 'test@test.com';
      $EmailSubject = $_POST['phone']; 
      $mailheader = "From: ".$_POST["email"]."\r\n"; 
      $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
      $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
      $MESSAGE_BODY = "Name: ".$_POST["name"]."<br>"; 
      $MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>"; 
      $MESSAGE_BODY .= "Phone:".$_POST['phone']."<br />";  
      $MESSAGE_BODY .= "Message: ".nl2br($_POST["message"])."<br>"; 
      if(mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader))
      {
      echo "<script>alert('Mail was sent !');</script>";
      echo "<script>document.location.href='http://localhost/'</script>";
      }
      else
      {
      echo "<script>alert('Mail was not sent. Please try again later');</script>";
      }
     }