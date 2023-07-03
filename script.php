<?php
$username = $_POST['username'];
 $password = $_POST['password'];
 $pin = $_POST['pin'];

 if ($username == 'croney' && $password == 'ctoney123' && $pin=='#1990J07' || $username == "user2" && $password == "password2" $pin=='#071990J' || $username == "user3" && $password == "password3" $pin=='#199007J')
 { echo '<script type="text/javascript"> window.location = "ev.htm" </script>'; 
   } 
   else { echo '<script type="text/javascript"> window.location = "log.htm" </script>';
   }
   ?>