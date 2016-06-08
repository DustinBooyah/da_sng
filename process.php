<?php 
if(isset($_POST['submit'])){
    $to = "sngpavement1@aol.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $telephone = $_POST['telephone'];
    $subject = "Message from the SnG Website";
    $subject2 = "Copy of message to SnG Gainesville";
    $message = "Sender:" . " " . $first_name . " " . $last_name . "\n\n" . "Phone:" . " " . $_POST['telephone'] . "\n\n" . "Email:" . " " . $_POST['email'] . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo header('Location: thankyou.html');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>