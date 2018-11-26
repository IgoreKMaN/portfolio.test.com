$(document).ready(function(){
	var height_block = $(".container-header-next").height();
	$("section .o-section-header, section .o-section-content").height(height_block);

	var scrollCss = $(".css").offset().top - $(".css").width(); 
		
	$(document).scroll(function(){
		var scrollTopWindow = $(document).scrollTop() + $(window).height(),
			cssOT = $(".css").offset().top + $(".css").height(),
			gitOT = $(".git").offset().top + $(".git").height(),
			photoshopOT = $(".photoshop").offset().top + $(".photoshop").height(),
			cssText = $(".css>p>span").text(),
			gitText = $(".git>p>span").text(),
			photoshopText = $(".photoshop>p>span").text(),
			jsText = $(".js>p>span").text(),
			videoText = $(".video>p>span").text(),
			animationText = $(".animation>p>span").text();
		

		if(scrollTopWindow > cssOT){
			$(".css .progressing-bar-in").css({"width": cssText});
			$(".js .progressing-bar-in").css({"width": jsText});	
		}
		if(scrollTopWindow > gitOT){
			$(".git .progressing-bar-in").css({"width": gitText});
			$(".video .progressing-bar-in").css({"width": videoText});	
		}
		if(scrollTopWindow > photoshopOT){
			$(".photoshop .progressing-bar-in").css({"width": photoshopText});
			$(".animation .progressing-bar-in").css({"width": animationText});	
		}
	})	

	var backgroundHeight =  $(".portfolio .item-portfolio img").height();
	$(".portfolio .background").height(backgroundHeight);

})