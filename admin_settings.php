

  <?php include_once("admin_header.php")?>
  
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