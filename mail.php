<?php 
if(isset($_POST['subscribe_email'])){
    $to = "casspangell@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = "Add Me To Your Newsletter!";
    $message = "There's new email wishing to be suscribed to your newsletter!" . "\n\n" . $_POST['from'];

    $headers = "From:" . $from;

    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>