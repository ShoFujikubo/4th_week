<?php
$to = "lohit@email.com";
$subject = "regarding student performance";
$message = "Hi, hii john is good as programing languages!";
$from = "fujikubosho@email.com";

if(mail($to, $subject, $message, $from)){
    echo "Your mail has been sent successfully.";
}else{
    echo "Unable to send email.Please try again.";
}
?>