<?php
include_once("admin_header.php");
include_once("db.php");
$sql_total = mq("select * from Menu,Price where Menu.idx=Price.idx;"); //전체메뉴
?>
  
  <!-- Banner Area Starts -->
  <section class="banner-area banner-area2 menu-bg text-center">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h1><i>Admin Settings</i></h1>
              </div>
          </div>
      </div>
  </section>
  <!-- Banner Area End -->

  <!-- Food Area starts -->
  <section class="food-area section-padding py-5">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-9">
                  <div class="food-detail">
                      <div class="row food-detail-img px-1">
                           <div class="col-xl-6 col-lg-5 col-md-10 col-sm-9">
                              <div class="row food-detail-content mt-3 px-3">
                                  <div class="tab-content d-flex flex-column">
                                      <div class="tab-pane container fade" id="home">
                                        <h3 class="text-heading title_color">Home</h3>
                                      </div>
                                      <div class="tab-pane container fade" id="about">
                                        <h3 class="text-heading title_color">About</h3>
                                      </div>
                                      <div class="tab-pane container fade" id="menu">
                                        <h3 class="text-heading title_color">Menu</h3>
                                        <div class="section-top-border">
                                        <a href="#" class="genric-btn primary-border small">Add</a>
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">#</div>
                            <div class="country">name</div>
                            <div class="percentage">description</div>
                            <div class="visit">price</div>
                            <div class="country">update</div>
                            <div class="country">delete</div>
                        </div>
                        <?php //피자 메뉴 조회
                        $idx = 0;
						while ($row = mysqli_fetch_array($sql_total)) {
                            $idx += 1;
							$menu_idx = $row[0];  
                            $menu_name = $row[1];  //메뉴 이름
                            $menu_description = $row[2];  //메뉴 설명
                            $menu_origin = $row[4];  //원산지
                            $menu_score = $row[5];  //별점
                            $price_m = $row[7];  //M 가격
                            $price_l = $row[8];  //L 가격
                            $price_big = $row[9];  //Big 가격
						?>
                        <div class="table-row">
                            <div class="serial"><?php echo $idx?></div>
                            <div class="country"><?php echo $menu_name?></div>
                            <div class="percentage"><?php echo $menu_description?></div>
                            <div class="visit"><?php echo $price_m?></div>
                            <div class="country"><a href="#" class="genric-btn primary-border small">update</a></div>
                            <div class="country"><a href="#" class="genric-btn primary-border small">delete</a></div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
                                      </div>
                                      <div class="tab-pane container fade" id="location">
                                        <h3 class="text-heading title_color">Location</h3>
                                      </div>
                                      <div class="tab-pane container fade" id="admin">
                                        <h3 class="text-heading title_color">Administrator</h3>
                                      </div>
                                      <div class="tab-pane container fade" id="information">
                                        <h3 class="text-heading title_color">Information</h3>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                  <ul id="info-tab" class="nav nav-pills flex-column px-2 px-md-0">
                      <li class="nav-item">
                          <a class="nav-link active" data-toggle="pill" href="#home">홈 관리</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" data-toggle="pill" href="#about">소개 관리</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" data-toggle="pill" href="#menu">메뉴 관리</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" data-toggle="pill" href="#location">위치 관리</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" data-toggle="pill" href="#admin">관리자 관리</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" data-toggle="pill" href="#information">매장 정보</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </section>
  <!-- Food Area End -->

<?php include_once("footer.php")?>