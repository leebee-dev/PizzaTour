<?php
    $menu_idx = $row[0];            // index
    $menu_name = $row[1];           // 메뉴 이름
    $menu_description = $row[2];    // 메뉴 설명
    $menu_class = $row[3];          // 메뉴 분류
    $menu_origin = $row[4];         // 원산지
    $menu_img = $row[5];            // 이미지
    $menu_best = $row[6];           // 추천
    $price_m = $row[8];             // M 가격
    $price_l = $row[9];             // L 가격
    $price_big = $row[10];          // Big 가격

    $link = "detail.php?name=".base64_encode(urlencode($menu_name));
?>
<div class="col-md-4 col-sm-6 tab-pane active" id="total">
    <a class="single-food" href=<?="$link"?>>
        <div class="food-img">
            <img src="assets/images/<?php echo $menu_img?>" class="img-fluid" alt="">
        </div>
        <div class="food-content">
            <div class="">
                <h5 class="korean"><?php echo $menu_name?></h5>
                <?php if($menu_best != 0) {?>
                    <!-- <span class="badge badge-pill badge-primary">New</span> -->
                    <span class="badge badge-pill badge-danger">Best!</span>
                <?php }?>
                <?php if($price_l != 0 and $price_big != 0) {?>
                    <div class="style-change">  M: ₩<?php echo $price_m?>  </div>
                    <div class="style-change">  L: ₩<?php echo $price_l?>  </div>
                    <div class="style-change">Big: ₩<?php echo $price_big?></div>
                <?php } else {?>
                    <div class="style-change"> Price: ₩<?php echo $price_m?>  </div>
                <?php }?>
            </div>
            
            <p class="pt-3"><?php echo $menu_description?></p>
        </div>
    </a>
</div>