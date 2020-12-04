var cupon = 5;

function showCupon(cupon){
    var count = cupon
    var items = document.getElementsByClassName('item');

    for (var i=0; i<count; i++) {
        items[i].style.backgroundColor="blue"

    }
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