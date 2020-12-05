<?php
    include_once("header.php");
    include_once("db.php");
    $name =  base64_decode(urldecode($_GET['name']));
    $sql_selected= mq("select * from Menu natural join Price natural join Nutrition where Menu.name='$name';") or die(mysql_error());
    $row = mysqli_fetch_array($sql_selected);
    $menu_idx = $row[0];            // index
    $menu_name = $row[1];           // 메뉴 이름
    $menu_description = $row[2];    // 메뉴 설명
    $menu_class = $row[3];          // 메뉴 분류
    $menu_origin = $row[4];         // 원산지
    $menu_img = $row[5];            // 이미지
    $menu_score = $row[6];          // 별점
    $price_m = $row[7];             // M 가격
    $price_l = $row[8];             // L 가격
    $price_big = $row[9];           // Big 가격
?>
    <link rel="stylesheet" href="assets/css/detail.css">
    
    <!-- Banner Area Starts -->
    <section class="banner-area banner-area2 menu-bg text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="korean title"><span class="style-change">상세정보</span></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
    
    <!-- Food Area starts -->
    <section class="food-area section-padding py-5">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-11">
                    <div class="food-detail">
                        <div class="row px-1">
                            <div class="col-xl-6 col-lg-5 col-md-10 col-sm-9">
                                <span class="badge badge-pill badge-primary">New</span>
                                <span class="badge badge-pill badge-danger">Hot</span>
                                <div class="row food-detail-content mt-3 px-3">
                                    <div class="d-flex flex-column">
                                        <h3><?="$menu_name"?></h3>
                                        <?php if($price_l != 0 and $price_big != 0) {?>
                                            <span>  M: ₩<?=$price_m?></span>
                                            <span>  L: ₩<?=$price_l?></span>
                                            <span>Big: ₩<?=$price_big?></span>
                                        <?php } else {?>
                                            <span>  Price: ₩<?=$price_m?></span>
                                        <?php }?>
                                        <p class="pt-3"><?=$menu_description?></p>
                                        <div id="score">
                                            <div>
                                                <i class="star fa fa-star"></i>
                                                <i class="star fa fa-star"></i>
                                                <i class="star fa fa-star"></i>
                                                <i class="star fa fa-star"></i>
                                                <i class="star fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div id="bg_score">
                                            <div>
                                                <i class="star fa fa-star"></i>
                                                <i class="star fa fa-star"></i>
                                                <i class="star fa fa-star"></i>
                                                <i class="star fa fa-star"></i>
                                                <i class="star fa fa-star"></i>
                                            </div>
                                            <span id="total_score" class="ml-3"><?=$menu_score?></span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/images/<?=$menu_img?>" class="img-fluid food-detail-img col-xl-6 col-lg-7 col-md-10 col-sm-10 col-10" alt="">
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row accordion justify-content-start my-5" id="info-tab">
                <div class="col-lg-7 col-sm-12">    
                    <div class="card">
                        <div class="card-header" id="origin-heading">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#origin" aria-expanded="true" aria-controls="origin">
                                    원산지
                                </button>
                            </h2>
                        </div>

                        <div id="origin" class="collapse show" aria-labelledby="origin-heading">
                            <div class="card-body">
                                <?=$menu_origin?>
                            </div>
                        </div>
                    </div>
                    
                    <div class=" card">
                        <div class="card-header" id="nutrient-heading">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#nutrient" aria-expanded="false" aria-controls="nutrient">
                                    영양성분
                                </button>
                            </h2>
                        </div>
                        <div id="nutrient" class="collapse show" aria-labelledby="nutrient-heading">
                            <div class="card-body">
                                <table class="table">
                                    <?php $heading=array("열량(kcal/100g)", "탄수화물(g/100g)", "당류(g/100g)","(조)단백질(g/100g)", "(조)지방(g/100g)", "포화지방(g/100g)","트랜스지방(g/100g)", "콜레스테롤(mg/100g)", "나트륨(mg/100g)")?>
                                    <?php for($i=10; $i < 19; $i++) {?>
                                    <tr>
                                        <th><?=$heading[$i-10]?></th>
                                        <td><?=$row[$i]?></td>
                                    </tr>
                                    <?php }?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-start">
                <div class="col-12 comments-area">
                    <div id="comment-section">Review</div>
                    <div class="comment-list">
                        <div class="single-comment">
                            <div class="user">
                                <div id="personal-score" class="">
                                    <span class="">
                                        <i class="star fa fa-star"></i>
                                        <i class="star fa fa-star"></i>
                                        <i class="star fa fa-star"></i>
                                        <i class="star fa fa-star"></i>
                                        <i class="star fa fa-star"></i>
                                    </span>
                                    <span class="">5.0</span>
                                </div>
                                <div class="desc">
                                    <h5><a href="#">Emilly Blunt</a></h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                </div>
                                <p class="comment mx-3">Never say goodbye till the end comes!</p>
                            </div>
                            <div class="reply-btn d-flex justify-content-end">
                                <a href="" class="genric-btn primary small radius btn-reply text-uppercase">reply</a> 
                            </div>
                        </div>
                        <div class="single-comment">
                            <div class="user">
                                <div id="personal-score" class="">
                                    <span class="">
                                        <i class="star fa fa-star"></i>
                                        <i class="star fa fa-star"></i>
                                        <i class="star fa fa-star"></i>
                                        <i class="star fa fa-star"></i>
                                        <i class="star fa fa-star"></i>
                                    </span>
                                    <span class="">5.0</span>
                                </div>
                                <div class="desc">
                                    <h5><a href="#">Emilly Blunt</a></h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                </div>
                                <p class="comment mx-3">Never say goodbye till the end comes!Never say goodbye till the end comes!Never say goodbye till the end comes!Never say goodbye till the end comes!Never say goodbye till the end comes!</p>
                            </div>
                            
                        </div>
                    </div>
                    <div id="comment-section">Edit Review</div>
                    <form class="comment-edit" action="detail.php" method="post">
                        <div class="row justify-content-between">
                            <div class="col-6 d-flex flex-column">
                                <span class="d-flex justify-content-start pt-2 pb-1">
                                    <input id="comment-title" name="comment-title" placeholder="제목" class="form-control form-control-sm"></input>
                                </span>
                                <span class="d-flex justify-content-start py-1">
                                    <input id="order-date" name="order-date" type='date' class="form-control form-control-sm" data-placeholder="주문일시" required aria-required="true"></input>
                                </span>
                            </div>
                            <div id="assign-star" class="col-5 justify-content-end d-flex align-self-center">
                                <label class="star-radioBox pt-2" ><input type="radio" name="star-point" value="1" /> &#xf005</label>
                                <label class="star-radioBox pt-2" ><input type="radio" name="star-point" value="2" /> &#xf005</label>
                                <label class="star-radioBox pt-2" ><input type="radio" name="star-point" value="3" /> &#xf005</label>
                                <label class="star-radioBox pt-2" ><input type="radio" name="star-point" value="4" /> &#xf005</label>
                                <label class="star-radioBox pt-2" ><input type="radio" name="star-point" value="5" /> &#xf005</label>
                            </div>
                        </div>
                        <span class="d-flex justify-content-between pt-1 pb-2">
                            <textarea id="comment-body" placeholder="후기를 남겨주세요." class="form-control" row="5"></textarea>
                        </span>
                        <input type=hidden name="user-id"></input>
                        <span class="row justify-content-end mt-3"><button id="comment-btn" class="genric-btn primary radius small " type="submit" >댓글 작성</button></span>
                    </form>                                     				
                </div>
            </div>
    </section>
    <!-- Food Area End -->

    <!-- Form Modal Start-->
    <div id="comment-modal" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">확인</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Modal End-->
    
<?php include_once("footer.php")?>