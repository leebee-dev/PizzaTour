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

        $("#score span").width(`${20*$("#total_score").text()}%`);
        $(".big-star span").width(`${20*$("#total_score").text()}%`);

        $(".personal-stars").each(function(){
            var star_num = Number($(this).next().text()) + 1;
            $(this).children(".0").nextUntil(`.${star_num}`).css({"color":"#f8b600"});
        });

        $("#login-direct-btn").on("click",function(){
            $('.modal-title').text("작성 실패");
            $('.modal-body p').text("로그인이 필요합니다.");
            $('#comment-modal').modal();
            $("#modal-btn").on("click",function(){
                window.location.href='login_form.php';
            });
        });
    });
})(jQuery);