$(document).ready(function(){
	var height_block = $(".container-header-next").height();
	$("section .o-section-header, section .o-section-content").height(height_block);

	var scrollCss = $(".item-skills").offset().top - $(".skills").height() - $(".css").height()*2;
	console.log(scrollCss);
	$(document).scroll(function(){
		if ($(document).scrollTop() >= scrollCss ) {
			//alert("Это работает");
			$(".css .progressing-bar-in").css({"width": "90%"});
			$(".js .progressing-bar-in").css({"width": "60%"});		
		}
	})

	/*$(".o-section-header").height(100%);*/
	

})