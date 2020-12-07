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

    
    <!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <h3 class="mb-30 title_color">Add Menu</h3>
                        <form action="admin/add_menu.php" method = "post" enctype="multipart/form-data">
                            <div class="mt-10">
                                <input type= "text" name="name" placeholder="메뉴이름*" onfocus="this.placeholder = ''" onblur="this.placeholder = '메뉴이름'" required class="single-input">
                            </div>
                            <div class="mt-10">
                                <textarea class="single-textarea" placeholder= "메뉴설명" onfocus="this.placeholder = ''" onblur="this.placeholder = '메뉴설명'"></textarea>
                            </div>
                            <div class="mt-10">
                                <input type="text" name="M" placeholder="M 또는 단품가격*" onfocus="this.placeholder = ''" onblur="this.placeholder = 'M 또는 단품가격'" required class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="L" placeholder="L 가격" onfocus="this.placeholder = ''" onblur="this.placeholder = 'L 가격'" class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="Big" placeholder="Big 가격" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Big 가격'" class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="origin" placeholder="원산지" onfocus="this.placeholder = ''" onblur="this.placeholder = '원산지'" class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="file" name="img" placeholder="메뉴 이미지" onfocus="this.placeholder = ''" onblur="this.placeholder = '메뉴 이미지'">
                            </div>
                            <div class="input-group-icon mt-10">
                                <div class="form-select" id="default-select">
                                    <select>
                                        <option value="0">--메뉴 종류 선택--</option>
                                        <option value="1">피자</option>
                                        <option value="2">치킨</option>
                                        <option value="3">세트</option>
                                        <option value="4">사이드</option>
                                    </select>
                                </div>
                            </div>
                            <div class="button-group-area mt-10">
                                <input type="submit" class="genric-btn default-border" value = "등록">
                            </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Align Area --> 

<?php include_once("footer2.php")?>