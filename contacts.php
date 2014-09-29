<?include 'include/headerInner.php';?>

	<div class="contactsPageBlock mbBlock">
		<strong>Тел:</strong> (8352) 222 322, 456 825, +79377433486 <br>	 
		<strong>Е-mail:</strong> ibwa@ibwa.com<br>	 
		<strong>Адрес:</strong> 428000, г.Чебоксары, Площадь Ленина, д.1<br>	 
		<strong>Режим работы:</strong> пн - пт с 8.00 до 17.00 <br>	 
	</div>

	<div class="fullWidth mbBlock">
		<script type="text/javascript" src="http://api-maps.yandex.ru/2.0-stable/?lang=ru-RU&coordorder=longlat&load=package.full&wizard=constructor&onload=fid_136332713178966162365"></script>
		<script type="text/javascript">

		  var myMap=null;
		  ymaps.ready(init);
		  function init(){
		    myMap=new ymaps.Map("mapYandex",{
		        center:[37.619811366887966,55.75380745769976],
		        zoom: 16,
		        type: "yandex#map"
		      }
		    );
		    myMap.controls.add("zoomControl").add("mapTools").add(new ymaps.control.TypeSelector(["yandex#map","yandex#satellite","yandex#hybrid","yandex#publicMap"]));
		    var placemark=new ymaps.Placemark([37.619811366887966,55.75380745769976],
		      {balloonContent: "Best Mobili"},{
		        iconImageHref: "i/marker.png",
		        iconImageSize:[23,34],
		        iconOffset:[0,5]
		      }
		    );
		    myMap.geoObjects.add(placemark);
		  }
		</script>
		<div id="mapYandex"></div>
	</div>


	<h2 class="pageTitle">
		Пресс-центр
	</h2>
	<div class="newsRows">
		<div class="row">
			<div class="inner">
				<div class="imgWrap squerEl witeBlack">
					<a href="" class="pic">
				      	<span class="inner">
				        	<img src="http://habrastorage.org/getpro/habr/post_images/607/c06/e7b/607c06e7bc027175088a9a959f4f116e.jpg" alt="">
				      	</span>
				    </a>
				</div>		    
			    <div class="text">					
						<a href="" class="title">Заголовок поста</a>
						<span class="date">24.06.2014 / Россия</span>			      	
				     <p>
				        Также сложившаяся структура организации позволяет оценить значение систем массового участия. Разнообразный и богатый опыт консультация с широким активом требуют определения и уточнения форм развития. Товарищи! новая модель организационной деятельности позволяет выполнять важные задания по разработке направлений прогрессивного развития. С другой стороны дальнейшее развитие различных форм деятельности представляет собой интересный эксперимент проверки новых предложений. Задача организации, в особенности же сложившаяся структура организации способствует подготовки и реализации соответствующий условий активизации. С другой стороны укрепление и развитие структуры позволяет выполнять важные задания по разработке новых предложений.
						Равным образом дальнейшее развитие различных форм деятельности позволяет выполнять важные задания по С другой стороны укрепление и развитие структуры позволяет выполнять важные задания по разработке новых предложений.
						Равным образом дальнейшее развитие различных форм деятельности позволяет выполнять важные задания по 
				    </p>

				    <div class="postInfo">
				    	<i class="fa fa-comments-o"></i> 45 &nbsp;&nbsp; <i class="fa fa-eye"></i> 55
				    </div>
			    </div>
			</div>
		</div>
		<div class="row">
			<div class="inner">
				<div class="imgWrap squerEl witeBlack">
					<a href="" class="pic">
				      	<span class="inner">
				        	<img src="http://habrastorage.org/getpro/habr/post_images/607/c06/e7b/607c06e7bc027175088a9a959f4f116e.jpg" alt="">
				      	</span>
				    </a>
				</div>		    
			    <div class="text">					
						<a href="" class="title">Заголовок поста</a>
						<span class="date">24.06.2014 / Россия</span>			      	
				     <p>
				        Также сложившаяся структура организации позволяет оценить значение систем массового участия. Разнообразный и богатый опыт консультация с широким активом требуют определения и уточнения форм развития. Товарищи! новая модель организационной деятельности позволяет выполнять важные задания по разработке направлений прогрессивного развития. С другой стороны дальнейшее развитие различных форм деятельности представляет собой интересный эксперимент проверки новых предложений. Задача организации, в особенности же сложившаяся структура организации способствует подготовки и реализации соответствующий условий активизации. С другой стороны укрепление и развитие структуры позволяет выполнять важные задания по разработке новых предложений.
						Равным образом дальнейшее развитие различных форм деятельности позволяет выполнять важные задания по С другой стороны укрепление и развитие структуры позволяет выполнять важные задания по разработке новых предложений.
						Равным образом дальнейшее развитие различных форм деятельности позволяет выполнять важные задания по 
				    </p>

				    <div class="postInfo">
				    	<i class="fa fa-comments-o"></i> 45 &nbsp;&nbsp; <i class="fa fa-eye"></i> 55
				    </div>
			    </div>
			</div>
		</div>
	</div>

	<!-- Пагинация -->
	<ul class="pagination">
	  <li class="prev"><a href=""></a></li>
	  <li><a href="">1</a></li>
	  <li><a href="">2</a></li>
	  <li class="active"><span>3</span></li>
	  <li class="next"><a href=""></a></li>
	</ul>


<?include 'include/footer.php';?>