<?php 
include_once("../db.php");
$sql = "INSERT INTO Menu(name, class) VALUES('더블치즈피자',1)";
mq($sql);
echo "추가완료";
?>