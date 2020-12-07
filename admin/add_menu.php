<?php
include_once("../db.php");
extract($_POST);

if(isset($_FILES['img']['name'])){
    $filepath = $_FILES['img']['tmp_name'];
    $filename = "../asset/images/".basename($_FILES['img']['name']);
    move_uploaded_file($filepath, $filename);
    echo $filepath;
}
else{
    $filename = "pizza.png";
}

if(isset($name)){
    mq("START TRANSACTION;");
    mq('INSERT INTO Menu(name, description, origin, img) VALUES('.'"'.$name.'"'.','.'"'.$description.'"'.','.'"'.$origin.'"'.','.'"'.$filename.'"'.');');
    mq('INSERT INTO Price(idx,M,L,Big) VALUES(LAST_INSERT_ID(),'.$price_m.','.$price_l.','.$price_big.');');
    mq("COMMIT;");
}?>

<meta charset="utf-8" />
<script type="text/javascript">
alert('추가되었습니다.');
location.href="../admin_settings.php";
</script>
