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


	//map
	function draw(ht) {
	    $("#mapContainer").html("<svg id='map' xmlns='http://www.w3.org/2000/svg' width='100%' height='" + ht + "'></svg>");
	    map = d3.select("svg");
	    var width = $("svg").parent().width();
	    var height = ht;

	    // I discovered that the unscaled equirectangular map is 640x360. Thus, we
	    // should scale our map accordingly. Depending on the width ratio of the new
	    // container, the scale will be this ratio * 100. You could also use the height 
	    // instead. The aspect ratio of an equirectangular map is 2:1, so that's why
	    // our height is half of our width.

	    projection = d3.geo.equirectangular().scale((width/640)*100).translate([width/2, height/2]);
	    var path = d3.geo.path().projection(projection);
	    d3.json('plugins/maps/world.json', function(collection) {
	        map.selectAll('path').data(collection.features).enter()
	            .append('path')
	            .attr('d', path)
	            .attr("width", width)
	            .attr("height", width/2);
	    });
	}
	draw($("#mapContainer").width()/2);

	
	
});