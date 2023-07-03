<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$bodycontent = <<<__INFO__
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Home Appliances Store</title>
</head>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="padding: 0;">

<div id="wrapper" dir="ltr" style="background-color: #f7f7f7; margin: 0; padding: 70px 0; width: 100%; -webkit-text-size-adjust: none;">
<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">


<tr>
<td align="center" valign="top">
<!-- Footer -->
<table border="0" cellpadding="10" cellspacing="0" width="600" id="template_footer"><tr>
<td valign="top" style="padding: 0; border-radius: 6px;">

<table border="0" cellpadding="10" cellspacing="0" width="100%"><tr>
<td colspan="2" valign="middle" id="credit" style='border-radius: 6px; border: 0; color: #8a8a8a; font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif; font-size: 12px; line-height: 150%; text-align: center; padding: 24px 0;'>
<p style="margin: 0 0 16px;">Home Appliances Store — Built with <a href="https://woocommerce.com" style="color: #96588a; font-weight: normal; text-decoration: underline;">WooCommerce</a></p>
</td>
</tr></table>
</td>
</tr></table>
<!-- End Footer -->
</td>
</tr>

                                       


</table>
</div>
</body>
</html>

__INFO__;

try {
    //Server settings
//    $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
    $mail->isSMTP();          //Send using SMTP
    $mail->Host = 'mail.avra.org.br'; //Set the SMTP server to send through
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->Username = 'info@avra.org.br'; //SMTP username
    $mail->Password = '1Pg({f=h~lpt'; //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
// $mail->SMTPSecure = 'smtp';
//   $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; //Enable implicit TLS encryption
    $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@avra.org.br', 'Excellent software');
    $mail->addAddress('podjescott@yandex.com', 'Ola New'); //Add a recipient
    $mail->addAddress('form@bacimmanti.com ');  //Name is optional
    $mail->addReplyTo('info@avra.org.br', 'Support');/*
    $mail->addCC('info@.com');
    $mail->addBCC('bcc@example.com'); */

    //Attachments
 /*   $mail->addAttachment('/var/tmp/file.tar.gz');   //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name
*/
    //Content
    $mail->isHTML(true);  //Set email format to HTML
    $mail->Subject = 'Excellent Rectify';
    $mail->Body = $bodycontent;
//    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}