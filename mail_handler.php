<?php 
if(isset($_POST['submit'])){
    $to = "casspangell@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
  
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message =  $first_name . " " . " wrote the following:" . "\n\n";
    
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);

    // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    header('Location: index.html'); 
    // You cannot use header and echo together. It's one or the other.
    }
?>