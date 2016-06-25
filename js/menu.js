$(document).ready(function(){

	/*$(".slider").css({"height":$(window).height() + "px"});*/

	var flag = false;
	var scroll;

	$(window).scroll(function(){
		scroll = $(window).scrollTop();

		if(scroll > 160){
			if(!flag){
				$("#navinicio").css({"background-color": "#0D395B"});
				/*$("a").css({"color": "#FFF", "text-decoration": "none", "font-weight": "bold"});*/
				$(".imglogo").addClass("imglogoAlterno");
				$("#face").addClass("redfacebookAlterno");
				$("#twit").addClass("redtwitterAlterno");
				flag = true;
			}
		}else{
			if(flag){
				$("#navinicio").css({"background-color": "transparent"});
				/*$("a").css({"color": "#00365C", "text-decoration": "none", "font-weight": "bold"});*/
				$(".imglogo").removeClass("imglogoAlterno");
				$("#face").removeClass("redfacebookAlterno");
				$("#twit").removeClass("redtwitterAlterno");
				flag = false;
			}
		}


	});

});

 