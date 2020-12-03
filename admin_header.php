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
    <title>피자투어 광탄점-관리자</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/banner-slider.css">
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
	<header class="header-area2">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="logo-area">
                        <a href="index.php"><img src="assets/images/logo/logo4.png" alt="logo"></a>
                        <h6>관리자 메뉴</h6>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                    <div class="main-menu main-menu2">
                        <ul>
                            <li class="active"><a href="admin.php">홈</a></li>
                            <li><a href="about.php">소개</a></li>
                            <li><a href="admin_menu.php">메뉴</a></li>
                            <li><a href="contact-us.php">위치</a></li>
                            <li><a href="admin_settings.php">관리자설정</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->