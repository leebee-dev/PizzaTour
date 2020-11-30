<?php
include_once("../db.php");


if(isset($_POST['select_obj']))
{
    $index = $_POST['select_obj'];

    $sql = mq("delete from Menu where idx = $index");
}
?>
    
