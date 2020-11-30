<?php
  session_start();
  if( isset( $_SESSION['admin'] ) ) {
    $admin_login = TRUE;
  }
?>