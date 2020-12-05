<?php include_once("header.php")?>
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
                                        <h3>더블치즈피자</h3>
                                        <span>  M: 7,900</span>
                                        <span>  L: 9,900</span>
                                        <span>Big:16,000</span>
                                        <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                                        <div id="score">
                                            <i class="star fa fa-star"></i>
                                            <i class="star fa fa-star"></i>
                                            <i class="star fa fa-star"></i>
                                            <i class="star fa fa-star"></i>
                                            <i class="star fa fa-star"></i>
                                            <span class="ml-3">5.0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/images/pizza_1.png" class="img-fluid food-detail-img col-xl-6 col-lg-7 col-md-10 col-sm-10 col-10" alt="">
                            
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
                                something to display
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
                                something to display
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
                    <form class="comment-edit" action="detail.html" method="post">
                        <div class="row justify-content-between">
                            <div class="col-6 d-flex flex-column">
                                <span class="d-flex justify-content-start pt-2 pb-1">
                                    <input id="nickname" name="nickname" placeholder="닉네임" class="form-control form-control-sm"></input>
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