(function($) {
    "use strict"
    jQuery(document).ready(function() {
        var assign = $("#assign-star :radio");
        assign.on("click",function(){
            $(this).parent().css({"color": "#f8b600"});
            $(this).parent().prevAll().css({"color": "#f8b600"});
            $(this).parent().nextAll().css({"color": "gray"});
        });

        $("form").submit(function(){
            if($("[name='nickname']").val() == '' ||
                    $("[name='order-date']").val() == undefined ||
                            $("#comment-body").val() == '') {
                $('.modal-title').text("작성 실패");
                $('.modal-body p').text("빈칸 없이 채워주세요.");
                $('#comment-modal').modal();
                return false
            }
            return true
        });

        // var score = ($("#bg_score").width()/5.0*$("#total_score").text()).toFixed(2);
        // $("#score").width(`${score}px`);
        
        // $(window).resize(function(){
        //     var score = ($("#bg_score").width()/5.0*$("#total_score").text()).toFixed(2);
        //     $("#score").width(`${score}px`);
        // });
        //alert(`${20*$("#total_score").text()}%`);
        //alert($("#score::before"));
        //$("#score::before").width(`${20*$("#total_score").text()}%`);

        $(".personal-stars").each(function(){
            var star_num = Number($(this).next().text()) + 1;
            $(this).children(".0").nextUntil(`.${star_num}`).css({"color":"#f8b600"});
        });
    });
})(jQuery);