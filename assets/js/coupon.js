var cupon = 5;
function showCupon(cupon){
    /*var count = cupon
    var items = document.getElementsByClassName('item');

    for (var i=0; i<count; i++) {
        items[i].style.backgroundColor="blue";
    }*/
}

// $(function() {
//     //----- OPEN
//     $('[code-popup-open]').on('click', function(e)  {
//         if(isMobile()){
//             var targeted_popup_class = jQuery(this).attr('code-popup-open');
//             $('[code-popup="' + targeted_popup_class + '"]').fadeIn(350);
//             e.preventDefault();
//         }
//     });

//     //----- CLOSE
//     $('[code-popup-close]').on('click', function(e)  {
//         var targeted_popup_class = jQuery(this).attr('code-popup-close');
//         $('[code-popup="' + targeted_popup_class + '"]').fadeOut(350);

//         e.preventDefault();
//     });
// });

showCupon(cupon);

(function($) {
    "use strict"
    jQuery(document).ready(function() {
        var qrcode = null;
        var count = 0;

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

        $("#saving-btn").on("click", function(){
            count++;
            if(qrcode == null) qrcode = createQRCode(count);
        });

        $("#using-btn").on("click", function(){
            if(count >= 12) {
                count -= 12;
                qrcode = removeQRcode();
            } else {
                $('.modal-title').text("사용 불가");
                $('.modal-body p').text(`아직 ${12-count}개 덜 모으셨어요~! 조금만 더 파이팅`);
                $('#info-modal').modal();
            }
        });
    });
})(jQuery);

function createQRCode() {
    $("#qrcode span").text("QRcode를 스캔해 주세요.");
    $("#qrcode").children("img, canvas").remove();

    var qrcode = new QRCode(document.getElementById("qrcode"), {
        text: `localhost:8080/PizzaTour/add_coupon.php?id=${document.getElementById("id").value}`,
        width: 128,
        height: 128,
        colorDark : "#000000",
        colorLight : "#ffffff",
        correctLevel : QRCode.CorrectLevel.H
    });
    $("#qrcode").children("img").addClass("center");

    return qrcode
}

function removeQRcode() {
    $("#qrcode span").text("QRcode를 스캔해 주세요.");
    $("#qrcode").children("img, canvas").remove();

    new QRCode(document.getElementById("qrcode"), {
        text: "Empty",
        width: 128,
        height: 128,
        colorDark : "#000000",
        colorLight : "#ffffff",
        correctLevel : QRCode.CorrectLevel.H
    });
    $("#qrcode").children("img").addClass("empty-qrcode");

    return null;
}

