<?php
  session_start();
  if(isset( $_SESSION['user'] ) ) {
    $jb_login = TRUE;
  }
  if( isset( $_SESSION['admin'] ) ) {
    $admin_login = TRUE;
  }

?>