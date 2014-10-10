$(function(){

	$("#menuButton").click(function(){
		$("#pageHTML").toggleClass("openMenu");
	});
	
	
	$('select').styler(); 

	topSl();

	$( window ).resize(function() {
	  	$("#pageHTML").removeClass("openMenu");
	  	topSl();
	});
	

	function topSl(){

		$(".squerEl").each(function(){
			$(this).height($(this).width());
		});

		$(".halfH").each(function(){
			$(this).height($(this).width()/2);
		});

		if($(window).width() < 481){
			$(".newsRows .squerEl").height($(".newsRows .squerEl").width()/2);
			$(".newsRows .row .text").height($(".newsRows .squerEl").width()/2);
		}

		$(".photoBlock .row").height($(".photoBlock .row").height());
		
		

		// $(".prodRowsOnMain .squerEl").height($(".prodRowsOnMain .squerEl").width());

		// $(".prodRowsOnMain.partCont .squerEl").height("auto"); 
		// $(".prodRowsOnMain.partCont .squerEl .wrap").height($(".prodRowsOnMain .squerEl").width()); 


		$(".fullWidth").each(function(){

			$(this).width($(window).width());

			$(this).css("margin-left", ($("main").width() - $(window).width())/2 + "px")

		});

		$(".videoRow .inner").height($(".videoRow .inner").width()/1.43);



		$("#containerMain").css("padding-bottom", $("#footer").height() + 120 + "px");


		$(".mapOnmain .videoBlock .row").height($(".mapOnmain .videoBlock .row").width()*0.66);
		
	}

	// Отображения Событий календаря

	$("td .contains").click(function(){
		$(this).find(".popEvent").toggleClass("shown");
	});

	
	
});