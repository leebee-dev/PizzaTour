<?php
    include_once("header.php");
    include_once("db.php");
    $userid = $_SESSION['user'];
    //echo "userid: ".$userid;
    $name =  urldecode(base64_decode($_GET['name']));
    // echo "name: ".$name;
    $sql_user = mq("SELECT idx FROM User WHERE userID='$userid';");
    $useridx = mysqli_fetch_array($sql_user)[0];
    // echo "useridx: ".$useridx;

    $sql_selected= mq("select * from Menu natural join Price left outer join Nutrition on Menu.idx = Nutrition.idx where Menu.name='$name';");
    $row = mysqli_fetch_array($sql_selected);
    $menu_idx = $row[0];            // index
    $menu_name = $row[1];           // 메뉴 이름
    $menu_description = $row[2];    // 메뉴 설명
    $menu_class = $row[3];          // 메뉴 분류
    $menu_origin = $row[4];         // 원산지
    $menu_img = $row[5];            // 이미지
    $menu_best = $row[6];
    $price_m = $row[7];             // M 가격
    $price_l = $row[8];             // L 가격
    $price_big = $row[9];           // Big 가격

    $sql_comment = mq("select title, content, Review.score as score, userID, orderDate, Review.created_at as created_at from Review join User on Review.userIdx = User.idx join Menu on Review.menuIdx=Menu.idx where Menu.idx ='$menu_idx';");

    $cmw_title = $_POST['comment-title'];
    $cmw_content = $_POST['comment-body'];
    $cmw_score = $_POST['star-point'];
    $cmw_userID = $_POST['user-id'];
    $cmw_orderDate = $_POST['order-date'];
    $cmw_date = date("Y-m-d H:i:s");

    $cmw_userIdx = $_POST['user-idx'];
    $cmw_menuIdx = $_POST['menu-idx'];
    $redirection = $_POST['redirection'];
    //쿼리전송
    $query="INSERT INTO Review(title,content,score,orderDate,userIdx,menuIdx,created_at)
            VALUES ('$cmw_title','$cmw_content','$cmw_score','$cmw_orderDate','$cmw_userIdx','$cmw_menuIdx','$cmw_date');";

    /*mysql_query("set names utf8",$connect); db한글문서깨질경우 추가*/
    
    $query_star = mq("SELECT menuIdx, AVG(score) FROM Review WHERE menuIdx = '$menu_idx' GROUP BY menuIdx;");
    $result_star = mysqli_fetch_array($query_star)[1];
    $result_star = empty($result_star)?'0.0':round($result_star,1);

    $query_stars = mq("SELECT score, count(score) FROM Review WHERE menuIdx = '$menu_idx' GROUP BY score ORDER BY score;");

    $one_star = 0;
    $two_star = 0;
    $thr_star = 0;
    $fou_star = 0;
    $fiv_star = 0;
    while($stat = mysqli_fetch_array($query_stars)) {
        switch($stat[0]) {
        case 1:
            $one_star = $stat[1];
            break;
        case 2:
            $two_star = $stat[1];
            break;
        case 3:
            $thr_star = $stat[1];
            break;
        case 4:
            $fou_star = $stat[1];
            break;
        case 5:
            $fiv_star = $stat[1];
            break;
        }
    }
    $tot_count = ($one_star + $two_star + $thr_star + $fou_star + $fiv_star) * 1.0;


    if (mysqli_query($maria_connect, $query)) { 
        header("Location:detail.php?name='$redirection'");
    } else {
        //echo "Error: " . $query . "<br>" . mysqli_error($maria_connect);
    }
?>
    
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
                                <?php if($menu_best != 0) {?>
                                    <span class="badge badge-pill badge-primary">New</span>
                                    <span class="badge badge-pill badge-danger">Hot</span>
                                <?php }?>
                                <div class="row food-detail-content mt-3 px-3">
                                    <div class="d-flex flex-column">
                                        <h3 class="korean"><?="$menu_name"?></h3>
                                        <?php if($price_l != 0 and $price_big != 0) {?>
                                            <span>  M: ₩<?=$price_m?></span>
                                            <span>  L: ₩<?=$price_l?></span>
                                            <span>Big: ₩<?=$price_big?></span>
                                        <?php } else {?>
                                            <span>  Price: ₩<?=$price_m?></span>
                                        <?php }?>
                                        <p class="pt-3"><?=$menu_description?></p>
                                        <div class="container row">
                                            <span id="score" class="star fa">&#xf005&#xf005&#xf005&#xf005&#xf005
                                                <span class="star fa">&#xf005&#xf005&#xf005&#xf005&#xf005</span>
                                            </span>
                                            
                                            <span id="total_score" class="ml-3"><?=$result_star?></span>
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
                <p class="korean" style="font-size: 10pt;">*상기 이미지는 실제 제품과는 다를 수 있습니다.</p>
                    <div class="card">
                        <div class="card-header" id="origin-heading">
                            <h2 class="mb-0">
                                <button class="korean btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#origin" aria-expanded="true" aria-controls="origin">
                                    원산지
                                </button>
                            </h2>
                        </div>

                        <div id="origin" class="collapse show" aria-labelledby="origin-heading">
                            <div class="card-body">
                                <?=$menu_origin != null ? $menu_origin:"찹쌀: 국내산, 치즈: 수입산" ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class=" card">
                        <div class="card-header" id="nutrient-heading">
                            <h2 class="mb-0">
                                <button class="korean btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#nutrient" aria-expanded="false" aria-controls="nutrient">
                                    영양성분
                                </button>
                            </h2>
                        </div>
                        <div id="nutrient" class="collapse show" aria-labelledby="nutrient-heading">
                            <div class="card-body">
                                <table class="korean table">
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
            <!--Comment Start-->
            <div class="row justify-content-start">
                <div class="col-12 comments-area">
                    <div class="comment-total">
                        <div id="comment-section bolder">TOTAL</div>
                            <div class="row">
                                <div class="total-comment align-self-center col-xs-9 col-lg-5 mt-12">
                                    <div id="" class="korean text-center bolder">사용자 총점</div>
                                    <div id="total-score" class="text-center">
                                        <span class="star fa big-star">&#xf005&#xf005&#xf005&#xf005&#xf005
                                            <span class="star fa">&#xf005&#xf005&#xf005&#xf005&#xf005</span>
                                        </span>
                                    </div>
                                    <div id="total-score-num" class="text-center">
                                        <h1 class="korean title" style="color:black;"><?=$result_star?>/5.0</h1>
                                    </div>
                                </div>

                                <div class="progress-table-wrap col-xs-9 col-lg-6">
                                    <div class="progress-table">
                                        <div class="table-head">
                                            <div class="serial">#</div>
                                            <div class="korean country"> 별점</div>
                                            <div class="korean percentage">Count</div>
                                        </div>
                                        <div class="table-row">
                                            <div class="serial">01</div>
                                            <span class="country">
                                                <i class="star fa fa-star" style="color:#f8b600;"></i>
                                                <i class="star fa fa-star"></i>
                                                <i class="star fa fa-star"></i>
                                                <i class="star fa fa-star"></i>
                                                <i class="star fa fa-star"></i>
                                            </span>
                                            <div class="percentage">
                                                <div class="progress">
                                                    <div class="progress-bar color-1" role="progressbar" style="width: <?=$one_star/$tot_count*100?>%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <span class="pl-2"><?=$one_star?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-row">
                                            <div class="serial">02</div>
                                            <span class="country">
                                                <i class="star fa fa-star" style="color:#f8b600;"></i>
                                                <i class="star fa fa-star" style="color:#f8b600;"></i>
                                                <i class="star fa fa-star"></i>
                                                <i class="star fa fa-star"></i>
                                                <i class="star fa fa-star"></i>
                                            </span>
                                            <div class="percentage">
                                                <div class="progress">
                                                    <div class="progress-bar color-2" role="progressbar" style="width: <?=$two_star/$tot_count*100?>%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <span class="pl-2"><?=$two_star?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-row">
                                            <div class="serial">03</div>
                                            <span class="country">
                                                <i class="star fa fa-star" style="color:#f8b600;"></i>
                                                <i class="star fa fa-star" style="color:#f8b600;"></i>
                                                <i class="star fa fa-star" style="color:#f8b600;"></i>
                                                <i class="star fa fa-star"></i>
                                                <i class="star fa fa-star"></i>
                                            </span>
                                            <div class="percentage">
                                                <div class="progress">
                                                    <div class="progress-bar color-3" role="progressbar" style="width: <?=$thr_star/$tot_count*100?>%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <span class="pl-2"><?=$thr_star?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-row">
                                            <div class="serial">04</div>
                                            <span class="country">
                                                <i class="star fa fa-star" style="color:#f8b600;"></i>
                                                <i class="star fa fa-star" style="color:#f8b600;"></i>
                                                <i class="star fa fa-star" style="color:#f8b600;"></i>
                                                <i class="star fa fa-star" style="color:#f8b600;"></i>
                                                <i class="star fa fa-star"></i>
                                            </span>
                                            <div class="percentage">
                                                <div class="progress">
                                                    <div class="progress-bar color-7" role="progressbar" style="width: <?=$fou_star/$tot_count*100?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <span class="pl-2"><?=$fou_star?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-row">
                                            <div class="serial">05</div>
                                            <span class="country">
                                                <i class="star fa fa-star" style="color:#f8b600;"></i>
                                                <i class="star fa fa-star" style="color:#f8b600;"></i>
                                                <i class="star fa fa-star" style="color:#f8b600;"></i>
                                                <i class="star fa fa-star" style="color:#f8b600;"></i>
                                                <i class="star fa fa-star" style="color:#f8b600;"></i>
                                            </span>
                                            <div class="percentage">
                                                <div class="progress">
                                                    <div class="progress-bar color-5" role="progressbar" style="width: <?=$fiv_star/$tot_count*100?>%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <span class="pl-2"><?=$fiv_star?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div id="comment-section bolder">REVIEW</div>
                    <div class="comment-list">
                        <?php
                            while($cm_row = mysqli_fetch_array($sql_comment)) {
                                include("review.php");
                            }                        
                        ?>
                    </div>
                    <div id="comment-section">Edit Review</div>
                    <form class="comment-edit" method="post">
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
                            <textarea id="comment-body" name="comment-body" placeholder="후기를 남겨주세요." class="form-control" row="5"></textarea>
                        </span>
                        <input type="hidden" name="user-idx" value="<?=$useridx?>"></input>
                        <input type="hidden" name="menu-idx" value="<?=$menu_idx?>"></input>
                        <input type="hidden" name="redirection" value="<?=$_GET['name']?>"></input>
                        <span class="row justify-content-end mt-3">
                            <?php if(empty($userid)) { ?>
                                <button id="login-direct-btn" class="genric-btn primary circle " type="button" style="font-weight: bolder; color : black;" >댓글 작성</button>
                            <?php } else {?>
                                <button id="comment-btn" class="genric-btn primary circle " type="submit" style="font-weight: bolder; color : black;" >댓글 작성</button>
                            <?php }?>
                        </span>
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
                    <h5 class="korean modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button id="modal-btn" type="button" class="btn btn-secondary" data-dismiss="modal">확인</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Modal End-->
    
<?php include_once("footer.php")?>