<?php
  if (isset(&_POST['submit'])){
    $mailto = "vickykilumanga@gmail.com";
    $name = $_POST['name'];
    $from = $_POST['email'];
    $subject = $_POST['subject'];
    $subject2 = "Your Message Submitted Successfully";
    $message = "Client Name: ". $name. "Wrote The Following Message". "\n\n". $_POST['message'];
    $message2 = "Dear ".$name. "\n\n". "Thank You For Contacting me! I will get back to you shortly.";
    $headers = "From: ". $from;
    $headers2 = "From: ". $mailto;
    $result = mail($mailto, $subject, $message, $headers);
    $result2 = mail($from, $subject2, $message2, $headers2);
    if ($result) {
        echo '<script type="text/javascript> alert("The Message Was Sent Successfully, I will Contact You Shortly!")</script>';
    }else {
        echo '<script type="text/javascript> alert("Submission Failed! Please Try Again.")</script>';
    }
  }
?>

