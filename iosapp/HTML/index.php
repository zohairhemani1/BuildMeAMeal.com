<?php
  session_start();


  $sessionName = session_name();
  $sessionCookie = session_get_cookie_params();

  session_destroy();

  setcookie($sessionName, false, $sessionCookie['lifetime'], $sessionCookie['path'], 
  $sessionCookie['domain'], $sessionCookie['secure']);
  header("location: login.html");
  
?>