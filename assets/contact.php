<?php 
if(isset($_POST['submit'])){
    function isValidEmail($InputEmail)
    { 
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$"; 
    if (eregi($pattern, $email)){ 
       return; 
    } 
    else { 
       return; 
    }    
    } 
    $to = "saipavan@gmail.com"; // this is your Email address
    $from = $_POST['InputEmail']; // this is the sender's Email address
    $first_name = $_POST['InputName'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['InputSubject']." ".$_POST['InputMessage']." Contact no:" . $InputPhone;
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . . $_POST['InputSubject']." ".$_POST['InputMessage'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", I will contact you shortly.";
    }
?>