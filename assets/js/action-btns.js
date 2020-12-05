
function isMobile(){

	var UserAgent = navigator.userAgent;
	if (UserAgent.match(/iPhone|iPod|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i) != null || UserAgent.match(/LG|SAMSUNG|Samsung/) != null)
	{
        return true;

	}else{

		return false;

	}

}

function callClick(){
    if(isMobile()){

        this.href="tel:0319447733"
    }
    else{
        alert("ddddd");
    }

}

$(function() {
    //----- OPEN
    $('[data-popup-open]').on('click', function(e)  {
        if(isMobile()){
            this.href="tel:0319447733";
        }
        else{
            var targeted_popup_class = jQuery(this).attr('data-popup-open');
            $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
            e.preventDefault();
        }
    });

    //----- CLOSE
    $('[data-popup-close]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-close');
        $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

        e.preventDefault();
    });
});