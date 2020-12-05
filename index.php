<?php include_once("header.php");
include_once("db.php");

$sql_best = mq("select * from Menu,Price where Menu.idx=Price.idx AND Menu.best=1;"); //전체메뉴

?>

<!-- Banner Area Starts -->
<section class="banner full">
				<article>
					<img src="assets/images/banner9.jpg"  alt="" />
					<div class="inner">
						<header>
                            <h1 class="korean prime-color">피자투어</span></h1>
                            <h6 class="korean">피자투어 광탄점은 하나하나 마음을 담은<br> 건강한 재료로 세상에서 가장 맛있는 피자를 선보이고 있습니다.</h6>
                        </header>
                        <a href="about.html" class="template-btn circle mt-3" style="font-weight: bolder; color : black;">자세히 보기</a>
                    </div>
				</article>
                <article>
					<img src="assets/images/pizza-banner.jpg" alt="" />
					<div class="inner">
						<header>
                            <h1 class="korean prime-color">피자투어</span></h1>
                            <h6 class="korean">피자투어 광탄점은 하나하나 마음을 담은<br> 건강한 재료로 세상에서 가장 맛있는 피자를 선보이고 있습니다.</h6>
                        </header>
                        <a href="about.html" class="template-btn circle mt-3" style="font-weight: bolder; color : black;">자세히 보기</a>
                    </div>
				</article>
                <article>
					<img src="assets/images/dough.jpg"  alt="" />
					<div class="inner">
						<header>
                            <h1 class="korean prime-color">피자투어</span></h1>
                            <h6 class="korean">피자투어 광탄점은 하나하나 마음을 담은<br> 건강한 재료로 세상에서 가장 맛있는 피자를 선보이고 있습니다.</h6>
                        </header>
                        <a href="about.html" class="template-btn circle mt-3" style="font-weight: bolder; color : black;">자세히 보기</a>
                    </div>
                </article>
                <article>
					<img src="assets/images/tomato.jpg"  alt="" />
					<div class="inner">
						<header>
                            <h1 class="korean prime-color">피자투어</span></h1>
                            <h6 class="korean">피자투어 광탄점은 하나하나 마음을 담은<br> 건강한 재료로 세상에서 가장 맛있는 피자를 선보이고 있습니다.</h6>
                        </header>
                        <a href="#" class="template-btn circle mt-3" style="font-weight: bolder; color : black;">자세히 보기</a>
                    </div>
                </article>
			</section>
    <!-- Banner Area End -->

    <!-- Welcome Area Starts -->
    <section class="welcome-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="welcome-img">
                        <img src="assets/images/potato.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="welcome-text mt-5 mt-md-0">
                        <h2><span class="korean prime-color">우리들의</span> <br><span class="korean" style="color: black;">이야기</span></h2>
                        <p class="pt-3">피자투어 광탄점은 주문 즉시 즉석에서 만드는 생치자 시스템으로 따끈따끈한 프리미엄 웰빙피자를 드실 수 있습니다. 피자투어 카페의 닭강정 등 사이드 메뉴는 피자투어만의 레시피로 만들어지는 독특한 맛으로 이미 20년간 소비자들의 사랑과 선택으로 만들어지고 있습니다.</p>
                        <a href="about.html#target1" class="template-btn mt-3" style="font-weight: bolder;">자세히</a>
                    </div>
                </div>
            </div><br><br>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Menu Area Starts -->
        <section class="banner-area section-padding4" style="background-image: url(assets/images/bg_1.jpg);">
            <div class="container-fluid"style="background-color: rgb(0,0,0,0.5);" >
                <div class="row" >
                    <div class="col-lg-12">
                        <div class="section-top2 text-center">
                            <h2 class="korean"><span>메뉴</span></h2>
                            <p style="color: white;"><i>피자투어의 대표메뉴와 사이드메뉴를 소개합니다.</i></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="testimonial-slider owl-carousel">
                        <?php
                        while ($row = mysqli_fetch_array($sql_best)) {
                            $menu_idx = $row[0];  //index
                            $menu_name = $row[1];  //메뉴 이름
                            $menu_description = $row[2];  //메뉴 설명
                            $menu_img = $row[5];  //이미지
                            $price_m = $row[9];  //M 가격
                            $price_l = $row[10];  //L 가격
                            $price_big = $row[11];  //Big 가격?>
                            <div class="single-slide d-md-inline-flex">
                                <div class="single-food">
                                    <div class="food-img">
                                        <a href="#"><img src="assets/images/<?php echo $menu_img;?>" class="img-fluid" alt="" ></a><br>
                                    </div>
                                    <div class="food-content">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="prime-color"style="font-weight: bolder;"><?php  echo $menu_name;?></h5>
                                            <span class="style-change" style="font-weight: bolder;"><?php echo $price_m."/"; echo $price_l."/"; echo $price_big."/"?></span>
                                        </div>
                                        <p class="pt-3" style="color: white;"><?php echo $menu_description;?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
    
        </section>
    <!-- Menu Area End -->

    <!-- Set Menu Area starts -->
    <section class="food-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-top2 center">
                        <h2 class="korean"><span class="style-change">세트 메뉴</span></h2>
                        <p class="pt-3">피자투어의 세트메뉴를 소개합니다.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-food">
                        <div class="food-img">
                            <img src="assets/images/banner7.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h3>A</h3>
                                <span class="style-change">$14.50</span>
                            </div>
                            <p class="pt-3">A세트, 15900, 콤비 or 불고기 M + 강정반박스 + 캔콜라
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5 mt-sm-0">
                        <div class="food-img">
                            <img src="assets/images/banner7.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h3>B</h3>
                                <span class="style-change">$9.50</span>
                            </div>
                            <p class="pt-3">B세트, 21900, 포테이토 or 통고구마 M+ 강정한박스 + 500mL콜라</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5 mt-md-0">
                        <div class="food-img">
                            <img src="assets/images/banner7.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h3>C</h3>
                                <span class="style-change">$12.50</span>
                            </div>
                            <p class="pt-3">C세트, 31900, 빅피자 + 강정한박스 + 1.25L콜라</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Best Menu Area End -->

    <!-- Reservation Area Starts -->
    <div class="reservation-area section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Natural ingredients and tasty food</h2>
                    <h4 class="mt-4">피자투어는 건강한 재료를 사용합니다</h4>
                    <a href="about.html#target2" class="template-btn template-btn2 mt-4" style="font-weight: bolder;">재료이야기</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation Area End -->

    <!-- Services Area Starts -->
    <section class="update-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h2><span class="korean prime-color">우리들의</span> <span class="korean" style="color: black;">서비스</span></h2>
                        <p class="pt-3">피자투어의 서비스</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-food">
                        <div class="food-img">
                            <img src="assets/images/flour.png" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <h5 class="korean" style="font-weight: bolder;">신선한 재료</h5>
                            <p>국내산 찹쌀을 사용한 발효 기법을 사용하여 최상의 풍미와 식감을 자랑하는 피자를 선보이고 있습니다.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-food my-5 my-md-0">
                        <div class="food-img">
                            <img src="assets/images/delivery.png" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <h5 class="korean" style="font-weight: bolder;">신속한 배달</h5>
                            <p>피자를 따듯하게 드실 수 있도록 안전하고 신속하게 배달합니다.<br><br></p>
                            <!-- <a href="#" class="template-btn3 mt-2">read more <span><i class="fa fa-long-arrow-right"></i></span></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-food">
                        <div class="food-img">
                            <img src="assets/images/cooking.png" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <h5 class="korean" style="font-weight: bolder;">100년 전통</h5>
                            <p>오리지널 이태리풍 피자소스 사용 하여 경쟁 브랜드와 차별화를 꾀하여 독보적인 기술력을 선보이고 있습니다.</p>
                            <!-- <a href="#" class="template-btn3 mt-2">read more <span><i class="fa fa-long-arrow-right"></i></span></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Services Area End -->

<?php include_once("footer.php")?>

