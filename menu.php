<?php 
include_once("header.php");
include_once("db.php");

$sql_total = mq("select * from Menu,Price where Menu.idx=Price.idx;"); //전체메뉴
$sql_pizza = mq("select * from Menu,Price where Menu.idx=Price.idx AND class=1;"); //피자
$sql_chicken = mq("select * from Menu,Price where Menu.idx=Price.idx AND class=2;");  //치킨
$sql_set= mq("select * from Menu,Price where Menu.idx=Price.idx AND class=3;"); //세트
$sql_side= mq("select * from Menu,Price where Menu.idx=Price.idx AND class=3;"); //사이드
?>

    <!-- Banner Area Starts -->
    <section class="banner-area banner-area2 menu-bg text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><i>Our Menu</i></h1>
                    <p class="pt-2"><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Food Area starts -->
    <section class="food-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-top">
                        <h3><span class="style-change">we serve</span> <br>delicious food</h3>
                        <p class="pt-3">They're fill divide i their yielding our after have him fish on there for greater man moveth, moved Won't together isn't for fly divide mids fish firmament on net.</p>
                    </div>
                </div>
            </div>
            <ul id="classification" class="row nav nav-pills px-3 pb-3 align-right justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#total">전체</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#pizza">피자</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#chicken">치킨</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#set">세트</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#side">사이드</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane container active" id="total">
                    <div class="row tab-content">
                    <?php //전체 메뉴 조회
						while ($row = mysqli_fetch_array($sql_total)) {
                            $menu_idx = $row[0];  //index
                            $menu_name = $row[1];  //메뉴 이름
                            $menu_description = $row[2];  //메뉴 설명
                            $menu_origin = $row[4];  //원산지
                            $menu_img = $row[5];  //이미지
                            $menu_score = $row[6];  //별점
                            $price_m = $row[8];  //M 가격
                            $price_l = $row[9];  //L 가격
                            $price_big = $row[10];  //Big 가격

						?>
                        <div class="col-md-4 col-sm-6 tab-pane active" id="total">
                            <a class="single-food" href="detail.html">
                                <div class="food-img">
                                    <img src="./assets/images/<?php echo $menu_img?>" class="img-fluid" alt="">
                                </div>
                                <div class="food-content">
                                    <div class="">
                                        <h5><?php echo $menu_name?></h5>
                                        <div class="style-change">  M: <?php echo $price_m?></div>
                                        <div class="style-change">  L: <?php echo $price_l?></div>
                                        <div class="style-change">Big: <?php echo $price_big?></div>
                                    </div>
                                    <p class="pt-3"><?php echo $menu_description?></p>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab-pane container fade" id="pizza">
                <div class="row tab-content">
                    <?php //피자 메뉴 조회
						while ($row = mysqli_fetch_array($sql_pizza)) {
							$menu_idx = $row[0];  //index
                            $menu_name = $row[1];  //메뉴 이름
                            $menu_description = $row[2];  //메뉴 설명
                            $menu_origin = $row[4];  //원산지
                            $menu_img = $row[5];  //이미지
                            $menu_score = $row[6];  //별점
                            $price_m = $row[8];  //M 가격
                            $price_l = $row[9];  //L 가격
                            $price_big = $row[10];  //Big 가격
						?>
                        <div class="col-md-4 col-sm-6 tab-pane active" id="total">
                            <a class="single-food" href="detail.html">
                                <div class="food-img">
                                <img src="./assets/images/<?php echo $menu_img?>" class="img-fluid" alt="">
                                </div>
                                <div class="food-content">
                                    <div class="">
                                        <h5><?php echo $menu_name?></h5>
                                        <div class="style-change">  M: <?php echo $price_m?></div>
                                        <div class="style-change">  L: <?php echo $price_l?></div>
                                        <div class="style-change">Big: <?php echo $price_big?></div>
                                    </div>
                                    <p class="pt-3"><?php echo $menu_description?></p>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab-pane container fade" id="chicken">
                <div class="row tab-content">
                    <?php //치킨 메뉴 조회
						while ($row = mysqli_fetch_array($sql_chicken)) {
							$menu_idx = $row[0];  //index
                            $menu_name = $row[1];  //메뉴 이름
                            $menu_description = $row[2];  //메뉴 설명
                            $menu_origin = $row[4];  //원산지
                            $menu_img = $row[5];  //이미지
                            $menu_score = $row[6];  //별점
                            $price = $row[8];  //M 가격
						?>
                        <div class="col-md-4 col-sm-6 tab-pane active" id="total">
                            <a class="single-food" href="detail.html">
                                <div class="food-img">
                                <img src="./assets/images/<?php echo $menu_img?>" class="img-fluid" alt="">
                                </div>
                                <div class="food-content">
                                    <div class="">
                                        <h5><?php echo $menu_name?></h5>
                                        <div class="style-change">  M: <?php echo $price?></div>
                                    </div>
                                    <p class="pt-3"><?php echo $menu_description?></p>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab-pane container fade" id="set">
                <div class="row tab-content">
                    <?php //세트 메뉴 조회
						while ($row = mysqli_fetch_array($sql_set)) {
							$menu_idx = $row[0];  //index
                            $menu_name = $row[1];  //메뉴 이름
                            $menu_description = $row[2];  //메뉴 설명
                            $menu_origin = $row[4];  //원산지
                            $menu_img = $row[5];  //이미지
                            $menu_score = $row[6];  //별점
                            $price = $row[8];  //M 가격
						?>
                        <div class="col-md-4 col-sm-6 tab-pane active" id="total">
                            <a class="single-food" href="detail.html">
                                <div class="food-img">
                                <img src="./assets/images/<?php echo $menu_img?>" class="img-fluid" alt="">
                                </div>
                                <div class="food-content">
                                    <div class="">
                                        <h5><?php echo $menu_name?></h5>
                                        <div class="style-change">  M: <?php echo $price?></div>
                                    </div>
                                    <p class="pt-3"><?php echo $menu_description?></p>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab-pane container fade" id="side">
                <div class="row tab-content">
                    <?php //사이드 메뉴 조회
						while ($row = mysqli_fetch_array($sql_side)) {
							$menu_idx = $row[0];  //index
                            $menu_name = $row[1];  //메뉴 이름
                            $menu_description = $row[2];  //메뉴 설명
                            $menu_origin = $row[4];  //원산지
                            $menu_img = $row[5];  //이미지
                            $menu_score = $row[6];  //별점
                            $price = $row[8];  //M 가격
						?>
                        <div class="col-md-4 col-sm-6 tab-pane active" id="total">
                            <a class="single-food" href="detail.html">
                                <div class="food-img">
                                <img src="./assets/images/<?php echo $menu_img?>" class="img-fluid" alt="">
                                </div>
                                <div class="food-content">
                                    <div class="">
                                        <h5><?php echo $menu_name?></h5>
                                        <div class="style-change">  M: <?php echo $price?></div>
                                    </div>
                                    <p class="pt-3"><?php echo $menu_description?></p>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Food Area End -->
<?php include_once("footer.php")?>
