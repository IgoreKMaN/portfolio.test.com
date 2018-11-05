$(document).ready(function(){
	var height_block = $(".container-header-next").height();
	$("section .o-section-header, section .o-section-content").height(height_block);
//alert($(".item-skills").offset().top);
	var sc_height_item_skills = $(" .item-skills ").offset().top; 
	if ($(" .item-skills ").next().hasClass('progressing-bar-in')) {
		alert("yes");
	}
	else{
		alert('no');
	} 

		//alert(sc_height_item_skills);
	if ($(window).scrollTop() === sc_height_item_skills ) {
		alert('good');
		$(".progressing-bar-in").css({"width": "70%"});
	
	}
	
})