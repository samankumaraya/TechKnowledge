<?php

if(isset($_POST['submit'])){
    $to	 		  = 'samankumaraya660@gmail.com'; // receiver
        $sender		  = 'samankumaraya1@gmail.com'; // email address of the sender
        $mail_subject = 'Verify Email Address';
        $email_body   = '<p> Thank you for signing Up</p>';
        $email_body   = '<h1>hello</h1>';
    
        $header       = "From: {$sender}\r\nContent-Type: text/html;";
    
        $send_mail_result = mail($to, $mail_subject, $email_body, $header);
    
        if ( $send_mail_result ) {
            echo 'Please check your email';
        } else {
            echo 'error';
        }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verfiy</title>
</head>
<body>
     <form action="sendemail.php" method="post">
         <input type="submit" name="submit" value="click">
     </form>
</body>
</html>