$(document).ready(function(){
	var height_block = $(".container-header-next").height();
	$("section .o-section-header, section .o-section-content").height(height_block);
alert($(".item-skills").offset().top);
	if ($(document).scrollTop() == $(" .item-skills ").offset().top) {
		alert($(".item-skills").offset().top);
		$(".progressing-bar-in").css({"width": "70%"});
	
	}
	
})