<?php 
include_once("../db.php");

/*mq("START TRANSACTION;");
mq("INSERT INTO Menu(name, class) VALUES('치즈피자',1);");
mq("INSERT INTO Price(idx, M) VALUES(LAST_INSERT_ID(),7900);");
mq("COMMIT;");*/

$sql_test = mq("select * from Menu,Price where Menu.idx=Price.idx;");
$row = mysqli_fetch_array($sql_test);
echo $row[7];
echo "완료";

?>