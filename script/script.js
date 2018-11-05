$(document).ready(function(){
	var height_block = $(".container-header-next").height();
	$("section .o-section-header, section .o-section-content").height(height_block);
<<<<<<< HEAD
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
	
=======

	if ($(document).hasClass("item-skills")) {
		alert("Class i-s yes");
		// statement
>>>>>>> e1f65a758e596e13ad468a92fed629443370074b
	}
	$(document).scroll(function(){
		if ($(document).scrollTop() == $(".item-skills").offset().top - $(".item-skills").width()) {
			alert("Это работает");
			$(".progressing-bar-in").css({"width": "70%"});		
		}
	})

	



	
})