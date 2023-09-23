<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'icsdtest2023@gmail.com'; 
    $mail->Password = 'jzqh mcgr ggzd kkqd'; 
    $mail->SMTPSecure = 'tls'; 
    $mail->Port = 587; 

    $mail->setFrom('icsdtest2023@gmail.com', 'ICS 2.2');
    $mail->addAddress($_POST["email_address"]);
    $mail->Subject = 'Welcome to ICS 2.2!Account Verification';
    $mail->Body = nl2br('Hello User,<br>
You requested an account on ICS 2.2.<br>
In order to use this account, you need to <a href="localhost/aden/tokenCheck.php">Click Here</a> to complete the registration process.<br>
Regards,<br>
Systems Admin<br>
ICS 2.2');


    $mail->isHTML(true); 

    if($mail->send()){
    ?>
    <script>
            alert("Authentication Email sent successfully!'");
    </script>
    <?php
    };
    // echo 'Email sent successfully!';
} catch (Exception $e) {?>
    <script>
            alert("Error occured and email couldnt be set "<?php $mail->ErrorInfo;?>);
    </script>
    <?php
}
?>
