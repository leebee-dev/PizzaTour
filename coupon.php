<?php include_once("header.php")?>

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

    <div class="row justify-content-center align-items-center">
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

        <!-- QRcode Area Starts -->
        <section class="col-lg-7 col-md-6">
            <div class="card p-3 m-2">
                <div class="row pt-2 pb-1">
                </div>
                <div class="row py-2 pr-3 justify-content-center">
                    <div class="card-body col-5">
                        <h5 class="korean card-title">QR 쿠폰</h5>
                        <p class="card-text">방문하실 때마다 하나씩 적립!<br>12개 적립시 ***가 공짜!</p>
                    </div>
                    <div id="qrcode" class="col-7 center qrcode-area">
                        <span></span>
                    </div>
                </div>
                <div class="row pt-1 pb-2 justify-content-center">
                    <button id="using-btn" class="genric-btn primary radius col-5 disabled">사용하기</button>
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


<?php include_once("footer.php")?>