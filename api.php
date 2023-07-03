<?php 
$username = $_POST['username'];
 $password = $_POST['password'];
 $pin = $_POST['pin'];
 //ctoney ctoney123 
 if ($username =='Ctoney' AND $password=='Ctoney@75' AND $pin=='#1990J07'
) 
 { echo   '<script type="text/javascript"> window.location = "ev.php" </script>'; }
else if ($username =='Wincoin' AND $password=='Coin@75' AND $pin=='#071990J') 
{ echo  '<script type="text/javascript"> window.location = "ev.htm" </script>'; } 
else { echo '<script type="text/javascript"> window.location = "log.htm" </script>';
} 
?>