<?php
    $name= $_POST['name'];
    $visitor_email= $_POST['email'];
    $message= $_POST['message'];


    $email = 'abc.email.example@gmail.com';

    $email_subject = 'new form submission';

    $email_body = "User Name: $name.\n".
                    "User Email: $email.\n".
                        "User message: $message.\n";

    $to= "vinny.narula7@gmail.com";

    $headers= "From: $email_from \r \n";

    $headers .= "Reply: $visitor_email \r \n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location:index.html")

?>
