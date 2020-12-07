var cupon = document.getElementById("count").value;
function showCupon(cupon){
    var count = cupon
    var items = document.getElementsByClassName('item');

    for (var i=0; i<count; i++) {
        items[i].style.backgroundColor="#ffb606";
    }
}

showCupon(cupon);

(function($) {
    "use strict"
    jQuery(document).ready(function() {
        var qrcode = null;
        var id = "";
        var count = cupon;

        $("#qrcode span").text("사용하기를 누르시면 QRcode가 생성됩니다.");
        new QRCode(document.getElementById("qrcode"), {
            text: "Empty",
            width: 128,
            height: 128,
            colorDark : "#000000",
            colorLight : "#ffffff",
            correctLevel : QRCode.CorrectLevel.H
        });

        $("#qrcode").children("img").addClass("empty-qrcode");

        /*$("#saving-btn").on("click", function(){
            count++;
            if(qrcode == null) qrcode = createQRCode(count);
        });*/

        $("#using-btn").on("click", function(){
            if(count >= 12) {
                $('.modal-title').text("직원확인");
                $('.modal-body p').text("직원확인 처리하시겠습니까? \n 직원 확인 후에는 쿠폰은 사용처리됩니다.");
                $('#info-modal').modal();
                location.href = "delete_coupon.php";
            } else {
                $('.modal-title').text("사용 불가");
                $('.modal-body p').text(`아직 ${12-count}개 덜 모으셨어요~! 조금만 더 파이팅`);
                $('#info-modal').modal();
                location.reload();
            }
        });
    });
})(jQuery);

function createQRCode() {
    $("#qrcode span").text("QRcode를 스캔해 주세요.");
    $("#qrcode").children("img, canvas").remove();

    var qrcode = new QRCode(document.getElementById("qrcode"), {
        text: `localhost/PizzaTour/add_coupon.php?id=${document.getElementById("id").value}`,
        width: 128,
        height: 128,
        colorDark : "#000000",
        colorLight : "#ffffff",
        correctLevel : QRCode.CorrectLevel.H
    });
    $("#qrcode").children("img").addClass("center");

    return qrcode
}
