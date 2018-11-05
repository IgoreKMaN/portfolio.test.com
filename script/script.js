$(document).ready(function(){
	var height_block = $(".container-header-next").height();
	$("section .o-section-header, section .o-section-content").height(height_block);

	$(document).scroll(function(){
		if ($(document).scrollTop() >= $(".item-skills").offset().top - $(".o-cont-absolute").height()) {
			//alert("Это работает");
			$(".progressing-bar-in").css({"width": "70%"});		
		}
	})
})