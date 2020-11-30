(function($) {
    "use strict"
    jQuery(document).ready(function() {
        var assign = $("#assign-star :radio");
        assign.on("click",function(){
            $(this).parent().css({"color": "#f8b600"});
            $(this).parent().prevAll().css({"color": "#f8b600"});
            $(this).parent().nextAll().css({"color": "gray"});
        });
    });
})(jQuery);