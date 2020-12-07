<?php 
include_once("header.php");
include_once("db.php");
include 'session_check.php';

if(!$jb_login){
    echo "<script>alert('로그인이 필요합니다');location.href='login_form.php';</script>";
}

$userid = $_SESSION['user'];
$sql = mq("SELECT * FROM User WHERE `userID`="."'".$userid."';");
$count = 0;
while ($row = mysqli_fetch_array($sql)) {
    $count = $row[6];
}
?>

    <!-- Banner Area Starts -->
    <section class="banner-area banner-area2 blog-page text-center" style="background-image: url(assets/images/table-bg.jpg) ;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="korean title"><span class="style-change">쿠폰</span></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <div class="row mx-1 justify-content-center align-items-center">
        <!--Coupon Area Stars-->
        <section class="update-area col-lg-4 col-md-5">
            <div class ="coupon-area">
                <div class="coupon container">
                    <div class="row grid-container">
                        <div class="item 1">1</div>
                        <div class="item 2">2</div>
                        <div class="item 3">3</div>
                        <div class="item 4">4</div>
                        <div class="item 5">5</div>
                        <div class="item 6">6</div>
                        <div class="item 7">7</div>
                        <div class="item 8">8</div>
                        <div class="item 9">9</div>
                        <div class="item 10">10</div>
                        <div class="item 11">11</div>
                        <div class="item 12">12</div>
                    </div>
                    <div class="row py-4">
                        <div id="saving-btn" class="template-btn circle">적립하기</div>
                    </div>
                </div>
            </div>
        </section>
        <!--Coupon Area Ends-->

        <!-- QRcode Area Starts -->
        <section class="m-auto col-lg-7 col-md-6">
            <div class="card p-3 m-2">
                <div class="row pt-2 pb-1">
                </div>
                <div class="row py-2 pr-3 justify-content-center">
                    <div class="card-body col-5">
                        <input type = "hidden" id = "id" value = "<?php echo $userid;?>"/>
                        <input type = "hidden" id = "count" value = "<?php echo $count;?>"/>
                        <h5 class="korean card-title">QR 쿠폰</h5>
                        <p class="card-text">방문하실 때마다 하나씩 적립!<br>12개 적립시 ***가 공짜!</p>
                    </div>
                    <div id="qrcode" class="col-7 center qrcode-area">
                        <span></span>
                    </div>
                </div>
                <div class="row pt-1 pb-2 justify-content-center">
                    <button id="using-btn" class="genric-btn primary radius col-5 disabled";> 사용하기</button>
                <div>
            </div>
        </section>
        <!-- QRcode Area End -->
    </div>

    <!-- Info Modal Start-->
    <div id="info-modal" class="modal" tabindex="-1">
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
    <!-- Info Modal End-->
<!-- Footer Area Starts -->
<footer class="footer-area">
        <div class="footer-widget section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-widget single-widget1">
                            <a href="index.html"><img src="assets/images/logo/logo2.png" alt=""></a>
                            <p class="mt-3">피자투어는 마음을 담은 <strong>건강한 재료</strong>로<br><strong>맛있는 피자</strong>를 만듭니다.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-widget single-widget2 my-5 my-md-0">
                            <h5 class="mb-4">contact us</h5>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="info-text">
                                    <p>경기 파주시 광탄면 등원로 527<br>광탄하나로마트 A동</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="info-text">
                                    <p>(123) 456 78 90</p>
                                </div>
                            </div>
                            <!-- <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="info-text">
                                    <p>support@axiomthemes.com</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-widget single-widget3">
                            <h5 class="mb-4">opening hours</h5>
                            <p>Open ................. AM 10 : 30</p>
                            <p>Close ................ PM 09 : 30</p>
                            <!-- <p>Monday ...................... Closed</p>
                            <p>Tue-Fri .............. 10 am - 12 pm</p>
                            <p>Sat-Sun ............... 8 am - 11 pm</p>
                            <p>Holidays ............. 10 am - 12 pm</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                        <p>A free responsive web site template by <a href="https://templated.co">TEMPLATED</a></p>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="social-icons">
                            <ul>
                            <?php
                                if($admin_login){
                                    echo '<li class="no-margin"><a href="login/logout.php" style="color: white">관리자 로그아웃</a></li>';
                                }
                                else{
                                    echo '<li class="no-margin"><a href="admin_login_form.php" style="color: white">관리자 로그인</a></li>';
                                }
                                ?>
                                <li class="no-margin">Follow Us</li>
                                <li><a href="https://www.facebook.com/pages/category/Food---Beverage-Company/%ED%94%BC%EC%9E%90%ED%88%AC%EC%96%B4-%EA%B4%91%ED%83%84%EC%A0%90-561928407281965/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-kakaotalk"></i></a></li>
                                <li><a href="#"><i class="fa fa-naver"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- Javascript -->
   <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/skel.min.js"></script>
    <script src="assets/js/vendor/qrcode.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/coupon.js"></script>
    <script src="assets/js/banner.js"></script>
    <script src="assets/js/action-btns.js"></script>
</body>
</html>
