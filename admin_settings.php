<?php
include_once("admin_header.php");
include_once("db.php");
$sql_total = mq("select * from Menu,Price where Menu.idx=Price.idx;"); //전체메뉴
?>

<script>
function delete_menu(select_obj) {
    if (confirm("메뉴를 삭제하시겠습니까?") == true) { //재확인
        $.ajax({ //삭제
            type: 'POST',
            url: "admin/delete_menu.php",
            data: {
                select_obj: select_obj
            },
            success: function(result) { 
            }
        })
        alert(select_obj);
        alert("삭제되었습니다.");
        location.reload();
    } else {
        return false; //취소
    }
}
</script>

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

    <section class="food-area section-padding">
        <div class="container">
            <ul id="classification" class="row nav nav-pills px-3 pb-3 align-right justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#total">메뉴 관리</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#pizza">댓글 관리</a>
                </li>
                <li class="nav-item">
                    <input type="button" class="nav-link" data-toggle="pill" onclick = "location.href = 'admin_register_form.php'" value = "관리자 등록">
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane container active" id="total">
                    <div class="row tab-content">
                    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <h3 class="mb-30 title_color">Table</h3>
                <a href="admin_add_menu.php" class="genric-btn primary-border small">Add</a>
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">#</div>
                            <div class="country">이름</div>
                            <div class="country">설명</div>
                            <div class="percentage">가격</div>
                            <div class="visit">수정</div>
                            <div class="visit">삭제</div>
                        </div>
                        <?php //피자 메뉴 조회
                        $idx = 0;
						while ($row = mysqli_fetch_array($sql_total)) {
                            $idx+=1;
                            $menu_idx = $row[0];  //index
                            $menu_name = $row[1];  //메뉴 이름
                            $menu_description = $row[2];  //메뉴 설명
                            $menu_origin = $row[4];  //원산지
                            $menu_img = $row[5];  //이미지
                            $menu_score = $row[6];  //별점
                            $price_m = $row[8];  //M 가격
                            $price_l = $row[9];  //L 가격
                            $price_big = $row[10];  //Big 가격
						?>
                        <div class="table-row">
                            <div class="serial"><?php echo $idx;?></div>
                            <div class="country"><?php echo $menu_name;?></div>
                            <div class="country"><?php echo $menu_description;?></div>
                            <div class="percentage"><?php echo $price_m;?></div>
                            <div class="visit"><a href="adn_update_menu.php?id=<?php echo $menu_idx?>" class="genric-btn primary-border small">update</a></div>
                            <div class="visit"><input type="button" id="<?php echo $menu_idx ?>" value="delete" onClick="delete_menu(<?php echo $menu_idx?>)" class="genric-btn primary-border small"></div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    </div>
                </div>
                <div class="tab-pane container fade" id="pizza">
                <div class="row tab-content">
                    
                    </div>
                </div>

                <div class="tab-pane container fade" id="../admin_register_form.php">
                <div class="row tab-content">
                    <?php echo "<script>location.href = admin_register_form.php</script>";?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Align Area -->

<?php include_once("footer.php")?>