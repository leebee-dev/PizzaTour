(function($) {
    "use strict"
    jQuery(document).ready(function() {
        var count = 0;

        $("#qrcode span").text("적립을 누르시면 QRcode가 생성됩니다.");
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
            createQRCode(count)
        });
    });
})(jQuery);

function createQRCode(count) {
    $("#qrcode span").text("QRcode를 스캔해 주세요.");
    $("#qrcode").children("img, canvas").remove();

    new QRCode(document.getElementById("qrcode"), {
        text: "administrator url" + count,
        width: 128,
        height: 128,
        colorDark : "#000000",
        colorLight : "#ffffff",
        correctLevel : QRCode.CorrectLevel.H
    });
    $("#qrcode").children("img").addClass("center");
}