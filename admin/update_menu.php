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
    mq('UPDATE Menu SET idx = '.$idx.'name = '.$name.'description = '.$description.'class = '.$class.'origin ='.$origin.'img ='.$img.' WHERE idx='.$idx.';');
    mq('UPDATE Price SET M = '.$M.' L ='.$L.' Big ='.$Big.' WHERE idx='.$idx.';');
    mq("COMMIT;");
}?>

<meta charset="utf-8" />
<script type="text/javascript">
alert('수정되었습니다.');
location.href="../admin_settings.php";
</script>
