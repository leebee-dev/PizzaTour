<?php 
include_once("header.php");
include_once("db.php");

$sql_total = mq("select * from Menu");
$sql_pizza = mq("select * from Menu where class=1");
$sql_topping = mq("select * from Menu where class=2");
$sql_side= mq("select * from Menu where class=3");
$sql_beverage = mq("select * from Menu where class=4");
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
                    <a class="nav-link" data-toggle="pill" href="#topping">토핑</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#side">사이드</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#beverage">음료</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane container active" id="total">
                    <div class="row tab-content">
                    <?php //전체 메뉴 조회
						while ($row = mysqli_fetch_array($sql_total)) {
                            $menu_idx = $row[0];
                            $menu_name = $row[1];
                            $menu_description = $row[2];
                            $menu_origin = $row[4];
							$menu_score = $row[5];
						?>
                        <div class="col-md-4 col-sm-6 tab-pane active" id="total">
                            <a class="single-food" href="detail.html">
                                <div class="food-img">
                                    <img src="assets/images/pizza1.png" class="img-fluid" alt="">
                                </div>
                                <div class="food-content">
                                    <div class="">
                                        <h5><?php echo $menu_name?></h5>
                                        <div class="style-change">  M: 7,900</div>
                                        <div class="style-change">  L: 9,900</div>
                                        <div class="style-change">Big:16,000</div>
                                    </div>
                                    <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab-pane container fade" id="pizza">
                <div class="row tab-content">
                    <?php //전체 메뉴 조회
						while ($row = mysqli_fetch_array($sql_pizza)) {
							$menu_name = $row[1];
						?>
                        <div class="col-md-4 col-sm-6 tab-pane active" id="total">
                            <a class="single-food" href="detail.html">
                                <div class="food-img">
                                    <img src="assets/images/pizza1.png" class="img-fluid" alt="">
                                </div>
                                <div class="food-content">
                                    <div class="">
                                        <h5><?php echo $menu_name?></h5>
                                        <div class="style-change">  M: 7,900</div>
                                        <div class="style-change">  L: 9,900</div>
                                        <div class="style-change">Big:16,000</div>
                                    </div>
                                    <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab-pane container fade" id="topping">topping
                <div class="row tab-content">
                    <?php //전체 메뉴 조회
						while ($row = mysqli_fetch_array($sql_topping)) {
							$menu_name = $row[1];
						?>
                        <div class="col-md-4 col-sm-6 tab-pane active" id="total">
                            <a class="single-food" href="detail.html">
                                <div class="food-img">
                                    <img src="assets/images/pizza1.png" class="img-fluid" alt="">
                                </div>
                                <div class="food-content">
                                    <div class="">
                                        <h5><?php echo $menu_name?></h5>
                                        <div class="style-change">  M: 7,900</div>
                                        <div class="style-change">  L: 9,900</div>
                                        <div class="style-change">Big:16,000</div>
                                    </div>
                                    <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab-pane container fade" id="side">
                <div class="row tab-content">
                    <?php //전체 메뉴 조회
						while ($row = mysqli_fetch_array($sql_side)) {
							$menu_name = $row[1];
						?>
                        <div class="col-md-4 col-sm-6 tab-pane active" id="total">
                            <a class="single-food" href="detail.html">
                                <div class="food-img">
                                    <img src="assets/images/pizza1.png" class="img-fluid" alt="">
                                </div>
                                <div class="food-content">
                                    <div class="">
                                        <h5><?php echo $menu_name?></h5>
                                        <div class="style-change">  M: 7,900</div>
                                        <div class="style-change">  L: 9,900</div>
                                        <div class="style-change">Big:16,000</div>
                                    </div>
                                    <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab-pane container fade" id="beverage">beverage
                <div class="row tab-content">
                    <?php //전체 메뉴 조회
						while ($row = mysqli_fetch_array($sql_beverage)) {
							$menu_name = $row[1];
						?>
                        <div class="col-md-4 col-sm-6 tab-pane active" id="total">
                            <a class="single-food" href="detail.html">
                                <div class="food-img">
                                    <img src="assets/images/pizza1.png" class="img-fluid" alt="">
                                </div>
                                <div class="food-content">
                                    <div class="">
                                        <h5><?php echo $menu_name?></h5>
                                        <div class="style-change">  M: 7,900</div>
                                        <div class="style-change">  L: 9,900</div>
                                        <div class="style-change">Big:16,000</div>
                                    </div>
                                    <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
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
