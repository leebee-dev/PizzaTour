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
                                  
                                    
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Food Area End -->

<?php include_once("footer.php")?>