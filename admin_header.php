<?php include 'session_check.php';
if(!$admin_login){
    echo("<script>alert('관리자 로그인이 필요합니다.');location.href='admin_login_form.php';</script>"); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>피자투어 - 웰빙프리미엄 국내산 찹쌀도우</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/logo3.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/banner-slider.css">
    <link rel="stylesheet" href="assets/css/action-btns.css">
    <link rel="stylesheet" href="assets/css/coupon.css">
    <link rel="stylesheet" href="assets/css/detail.css">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/contact-us.css">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- floating button Starts-->
    <ul class="fixed-action-btns">
        <li>
            <a href="#" data-popup-open="call" class="fab action-call">
                <span class="fa fa-phone"></span>
            </a>
            
            <div class="popup" data-popup="call">
                <div class="popup-inner">
                    <div class="popup-contents">
                        <a class="popup-close" data-popup-close="call" href="#">확인</a>
                        전화연결은 모바일에서 가능합니다<br>
                        <h3 class="korean prime-color">" 031-944-7733 "</h3>
                        <h5 class="korean">피자투어 광탄점</h5>
                    </div>
                </div>
              </div>

        </li>
        <li>
            <a href="contact-us.php" class="fab">
                <span class="fa fa-map-marker"></span>
            </a>
        </li>
        <li>
            <a href="coupon.php" class="fab">
                <span class="fa fa-gift"></span>
            </a>
        </li>
        <li>
            <span class="fab scroll-ctrl">
                <span class="fa fa-angle-up"></span>
            </span>
        </li>
    </ul>
    <!--folating button End-->

    <!-- Header Area Starts -->
	<header class="header-area2">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo-area">
                        <a href="index.php"><img src="assets/images/logo/logo.png" alt="logo"></a>
                        <h6>관리자 메뉴</h6>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                    <div class="main-menu main-menu2">
                        <ul>
                            <li class="active"><a href="index.php">홈</a></li>
                            <li><a href="about.php">소개</a></li>
                            <li><a href="menu.php">메뉴</a></li>
                            <li><a href="contact-us.php">위치</a></li>
                            <li><a href="admin_settings.php">관리자 페이지</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
