<?php
    if(isset($_POST['submit'])){
        $to = $_POST['sender'];
        $subject = "Contact Us Form Submission";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $headers = "From: ".$name." <".$email.">";
    
        if(mail($to,$subject,$message,$headers)){
            echo "<p>Thank you for getting in touch! We'll get back to you soon.</p>";
        } else{
            echo "<p>Oops! Something went wrong. Please try again later.</p>";
        }
    }
    ?>