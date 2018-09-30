<?php 
  session_start();
  $_SESSION['loggedIn'] = true;
  $_SESSION['email'] = $email;
?>