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
        <div id="personal-score" class="">
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
        <div class="desc">
            <h5 class="korean"><?=$cm_title?></h5>
            <p class="date"><?=$cm_date?></p>
        </div>
        <p class="comment mx-3"><?=$cm_content?></p>
    </div>
    <div><?=$cm_userID?></div>
    <div><?=$cm_orderDate?></div>
    <!-- <div class="reply-btn d-flex justify-content-end">
        <a href="" class="genric-btn primary small radius btn-reply text-uppercase">reply</a> 
    </div> -->
</div>