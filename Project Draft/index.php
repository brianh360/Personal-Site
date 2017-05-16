<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $mobile = $_POST['mobile'];
  $subject = $_POST['subject'];
  $from = 'From: BrianHurst.io';
  $to = 'therealbrianhurst@gmail.com';
  $subject2 = 'New Submission from Website Contact Form';

  $body = "From: $name\n E-mail: $email\n Message: $message";

  if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {
      echo '<p>Your message has been sent!</p>';
    } else {
          echo '<p>Something went wrong, go back and try again!</p>';
        }
    }
  }

?>