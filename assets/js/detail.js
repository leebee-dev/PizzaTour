(function($) {
    "use strict"
    jQuery(document).ready(function() {
        var assign = $("#assign-star :radio");
        assign.on("click",function(){
            $(this).parent().css({"color": "#f8b600"});
            $(this).parent().prevAll().css({"color": "#f8b600"});
            $(this).parent().nextAll().css({"color": "gray"});
        });

        $("#temp").on("click", function(){
            if($("[name='nickname']").val() == '' || $("[name='order-date']").val() == undefined) {
                $('#comment-modal').modal();
            } 
        });

        $("form").submit(function(){
            if($("[name='nickname']").val() == '' ||
                    $("[name='order-date']").val() == undefined ||
                            $("#comment-body").val() == '') {
                $('#comment-modal').modal();
                return false
            }
            return true
        });

        
    });
})(jQuery);

function check(form) {
    alert(form.name.val())
    
}