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

        
    });
})(jQuery);