$(document).ready(function(){
	var height_block = $(".container-header-next").height();
	$("section .o-section-header, section .o-section-content").height(height_block);

	if ($(document).hasClass("item-skills")) {
		alert("Class i-s yes");
		// statement
	}
	$(document).scroll(function(){
		if ($(document).scrollTop() == $(".item-skills").offset().top - $(".item-skills").width()) {
			alert("Это работает");
			$(".progressing-bar-in").css({"width": "70%"});		
		}
	})

	



	
})