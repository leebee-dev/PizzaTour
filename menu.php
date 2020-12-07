<?php 
include_once("header.php");
include_once("db.php");

$sql_total = mq("select * from Menu,Price where Menu.idx=Price.idx;"); //전체메뉴
$sql_pizza = mq("select * from Menu,Price where Menu.idx=Price.idx AND class=1;"); //피자
$sql_chicken = mq("select * from Menu,Price where Menu.idx=Price.idx AND class=2;");  //치킨
$sql_set= mq("select * from Menu,Price where Menu.idx=Price.idx AND class=3;"); //세트
$sql_side= mq("select * from Menu,Price where Menu.idx=Price.idx AND class=4;"); //사이드
?>


    <!-- Banner Area Starts -->
    <section class="banner-area banner-area2 menu-bg text-center" style="background-image: url(assets/images/pizza-banner.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="korean title"><span class="style-change">메뉴</span></h1>
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
                        <h3><span class="korean prime-color">피자투어의</span> <br><span class="korean">메뉴를 소개합니다.</span></h3>
                        <p class="pt-3">피자투어 광탄점은 정성으로 피자를 만듭니다.</p>
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
                            include("single_food.php");
						?>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab-pane container fade" id="pizza">
                <div class="row tab-content">
                    <?php //피자 메뉴 조회
						while ($row = mysqli_fetch_array($sql_pizza)) {
                            include("single_food.php");
                        } ?>
                    </div>
                </div>
                <div class="tab-pane container fade" id="chicken">
                <div class="row tab-content">
                    <?php //치킨 메뉴 조회
						while ($row = mysqli_fetch_array($sql_chicken)) {
                            include("single_food.php");
						} ?>
                    </div>
                </div>
                <div class="tab-pane container fade" id="set">
                <div class="row tab-content">
                    <?php //세트 메뉴 조회
						while ($row = mysqli_fetch_array($sql_set)) {
                            include("single_food.php");
						} ?>
                    </div>
                </div>
                <div class="tab-pane container fade" id="side">
                <div class="row tab-content">
                    <?php //사이드 메뉴 조회
						while ($row = mysqli_fetch_array($sql_side)) {
                            include("single_food.php");
						} ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Food Area End -->
<?php include_once("footer.php")?>
