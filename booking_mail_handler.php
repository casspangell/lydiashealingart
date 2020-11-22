<?php 
if(isset($_POST['submit'])){
    $to = "lydia@lydiashealingart.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $booking = $_POST['booking'];
    $phone = $_POST['number'];
  
    $subject = "Booking Request";
    $subject2 = "Copy of your form submission";
    $message =  $first_name . " " . "requests a booking of: " . $booking . "\n\n" . "CONTACT INFO: " . $phone . " " . $from . " MESSAGE: " . $message;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);

    // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    header('Location: book.html'); 
    // You cannot use header and echo together. It's one or the other.
    }
?>


            