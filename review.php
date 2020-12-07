<?php
    $cm_title = $cm_row[0];
    $cm_content = $cm_row[1];
    $cm_score = $cm_row[2];
    $cm_userID = $cm_row[3];
    $cm_orderDate = $cm_row[4];
    $cm_date = $cm_row[5];
?>

<div class="single-comment">
    <div class="user">
        <div id="personal-score" class="row mb-3">
            <div class="customer-img ml-3 mr-3 mb-4 mb-sm-0">
                <span class="fa fa-user-circle" style="font-size: 500%;"></span>
            </div>
            <div class="desc">
                <h5 class="korean"><?=$cm_userID?></h5>
                <p class="date mb-0"><?=$cm_date?></p>
                <span class="personal-stars">
                    <span class="0"></span>
                        <i class="star fa fa-star 1"></i>
                        <i class="star fa fa-star 2"></i>
                        <i class="star fa fa-star 3"></i>
                        <i class="star fa fa-star 4"></i>
                        <i class="star fa fa-star 5"></i>
                    <span class="6"></span>
                </span>
                <span class="score-num"><?=$cm_score?></span>
            </div>
            <div class="desc pl-5 korean">
                <h5 class="korean"><?=$cm_title?></h5>
                <p class="korean"><?=$cm_content?></p>
            </div>
        </div>
        <p class="comment mx-3">주문일시: <?=$cm_orderDate?></p>
    </div>
    
    
    <!-- <div class="reply-btn d-flex justify-content-end">
        <a href="" class="genric-btn primary small radius btn-reply text-uppercase">reply</a> 
    </div> -->
</div>