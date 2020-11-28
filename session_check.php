<?php
  session_start();
  if( isset( $_SESSION[ 'adminID' ] ) ) {
    $login = TRUE;
  }
?>