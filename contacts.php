<?include 'include/headerInner.php';?>

	<div class="contRow mbBlock">
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
		<div id="mapYandex" class="pull-right">
			<span class="button red share">Поделиться с другом</span>
		</div>

		<div class="contactsPageBlock">
			<strong>Тел:</strong> (8352) 222 322, 456 825, +79377433486 <br>	 
			<strong>Е-mail:</strong> ibwa@ibwa.com<br>	 
			<strong>Адрес:</strong> 428000, г.Чебоксары, Площадь Ленина, д.1<br>	 
			<strong>Режим работы:</strong> пн - пт с 8.00 до 17.00 <br>	 

			<br>
			<br>
			<h2 class="subTitleFirst">Обратная связь</h2>
			<form action="">
				<div class="group matInputWrapper">      
				    <input type="text" class="matInput" required="">
				    <span class="highlight"></span>
				    <span class="bar"></span>
				    <label>Представьтесь пожалуйста</label>
			    </div>
				<div class="group matInputWrapper">      
				    <input type="text" class="matInput" required="">
				    <span class="highlight"></span>
				    <span class="bar"></span>
				    <label>E-mail</label>
			    </div>
			    <div class="group matInputWrapper">      
				    <input type="text" class="matInput" required="">
				    <span class="highlight"></span>
				    <span class="bar"></span>
				    <label>Сообщение</label>
			    </div>

				<input type="submit" class="red">
			</form>
		</div>
		<div class="clear"></div>
	</div>

	<h2 class="pageTitle ">Контакты национальных федераций</h2>
	<div class="formRow chooseCountry mbBlock">
		<label class="label">Страна:</label>
		<div class="input">			
			<select name="" id="">
				<option value="">Lorem ipsum.</option>
				<option value="">Nostrum, ullam.</option>
				<option value="">Officiis, odio.</option>
				<option value="">Obcaecati, animi.</option>
				<option value="">Ullam, ratione!</option>
				<option value="">Veritatis, atque.</option>
				<option value="">Pariatur, velit!</option>
				<option value="">Facilis, vitae!</option>
				<option value="">Excepturi, quod.</option>
				<option value="">Architecto, et.</option>
				<option value="">Natus, mollitia!</option>
				<option value="">Placeat, nobis.</option>
				<option value="">Ut, in.</option>
				<option value="">Ipsum, ad.</option>
				<option value="">Voluptatum, tempora.</option>
				<option value="">Saepe, commodi!</option>
				<option value="">Eaque, ullam.</option>
				<option value="">Accusamus, enim.</option>
				<option value="">Ipsum, harum.</option>
				<option value="">Ipsum, a.</option>
				<option value="">Optio, enim.</option>
				<option value="">Quia, ea.</option>
				<option value="">Quasi, earum.</option>
				<option value="">Omnis, tenetur.</option>
				<option value="">Esse, ipsum.</option>
				<option value="">Repellendus, numquam.</option>
				<option value="">Culpa, nobis!</option>
				<option value="">Aliquam, similique?</option>
				<option value="">Aspernatur, ipsa.</option>
				<option value="">Eveniet, aspernatur.</option>
				<option value="">Ipsum, incidunt.</option>
				<option value="">Expedita, neque.</option>
				<option value="">Rem, voluptas.</option>
				<option value="">Repellat, vero!</option>
				<option value="">Inventore, iure!</option>
				<option value="">Doloribus, cumque.</option>
				<option value="">Accusantium, laboriosam.</option>
				<option value="">Minima, odio!</option>
				<option value="">Fugiat, ullam.</option>
				<option value="">Asperiores, natus.</option>
				<option value="">Repellendus, atque!</option>
				<option value="">Blanditiis, delectus!</option>
				<option value="">Debitis, repellendus.</option>
				<option value="">Consectetur, odit.</option>
				<option value="">Eaque, voluptatum.</option>
				<option value="">Culpa, magni.</option>
				<option value="">Iste, eaque.</option>
				<option value="">Cupiditate, quis.</option>
				<option value="">Veniam, illum.</option>
				<option value="">Excepturi, veritatis!</option>
				<option value="">Iure, perspiciatis.</option>
				<option value="">Dignissimos, quia!</option>
				<option value="">Laudantium, veniam.</option>
				<option value="">Blanditiis, culpa.</option>
				<option value="">Quae, voluptatem!</option>
				<option value="">Sint, quam.</option>
				<option value="">Veritatis, sint.</option>
				<option value="">Temporibus, a.</option>
				<option value="">Magni, dicta.</option>
				<option value="">Autem, rem.</option>
				<option value="">Est, numquam.</option>
				<option value="">Quos, in!</option>
				<option value="">Necessitatibus, aut.</option>
				<option value="">Quos, ratione.</option>
				<option value="">Earum, voluptates.</option>
				<option value="">Explicabo, dolor.</option>
				<option value="">Pariatur, iure!</option>
				<option value="">Impedit, qui.</option>
				<option value="">Natus, totam!</option>
				<option value="">Rem, eaque!</option>
				<option value="">Nesciunt, cupiditate.</option>
				<option value="">Fuga, unde.</option>
				<option value="">Optio, harum!</option>
				<option value="">Blanditiis, iste.</option>
				<option value="">Quo, veniam.</option>
				<option value="">Consequatur, modi!</option>
				<option value="">Expedita, iste!</option>
				<option value="">Quasi, animi!</option>
				<option value="">Molestias, repellat.</option>
				<option value="">Ut, enim.</option>
				<option value="">Odio, delectus!</option>
				<option value="">Dolorem, magni!</option>
				<option value="">Cum, earum!</option>
				<option value="">Ut, magnam.</option>
				<option value="">Facere, nemo!</option>
				<option value="">Facilis, alias.</option>
				<option value="">Eius, dolorem.</option>
				<option value="">Asperiores, perspiciatis!</option>
				<option value="">Atque, obcaecati.</option>
				<option value="">Id, est?</option>
				<option value="">Eveniet, et.</option>
				<option value="">Consectetur, beatae.</option>
				<option value="">Odio, natus.</option>
				<option value="">Eius, molestias?</option>
				<option value="">Vero, obcaecati.</option>
				<option value="">In, alias.</option>
				<option value="">Mollitia, quis.</option>
				<option value="">Corporis, quae.</option>
				<option value="">Aliquid, totam.</option>
				<option value="">Ab, voluptates.</option>
			</select>
		</div>
	</div>
	<div class="contRow mbBlock">
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
		<div id="mapYandex" class="pull-right">
			<span class="button red share">Поделиться с другом</span>
		</div>

		<div class="contactsPageBlock">
			<h2 class="subTitleFirst">Федерация борьбы Свердловской области</h2>
			<strong>Тел:</strong> (8352) 222 322, 456 825, +79377433486 <br>	 
			<strong>Е-mail:</strong> ibwa@ibwa.com<br>	 
			<strong>Адрес:</strong> 428000, г.Чебоксары, Площадь Ленина, д.1<br>	 
			<strong>Режим работы:</strong> пн - пт с 8.00 до 17.00 <br>	 

			<br>
			<br>
			<h2 class="subTitleFirst">Обратная связь</h2>
			<form action="">
				<div class="group matInputWrapper">      
				    <input type="text" class="matInput" required="">
				    <span class="highlight"></span>
				    <span class="bar"></span>
				    <label>Представьтесь пожалуйста</label>
			    </div>
				<div class="group matInputWrapper">      
				    <input type="text" class="matInput" required="">
				    <span class="highlight"></span>
				    <span class="bar"></span>
				    <label>E-mail</label>
			    </div>
			    <div class="group matInputWrapper">      
				    <input type="text" class="matInput" required="">
				    <span class="highlight"></span>
				    <span class="bar"></span>
				    <label>Сообщение</label>
			    </div>

				<input type="submit" class="red">
			</form>
		</div>
		<div class="clear"></div>
	</div>


<?include 'include/footer.php';?>