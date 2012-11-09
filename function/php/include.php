<?php
		
		$fecha = file_get_contents("http://feed.evangelizo.org/reader.php?date=$today&type=liturgic_t&lang=SP");
		$primeralectura = file_get_contents("http://feed.evangelizo.org/reader.php?date=$today&type=reading&lang=SP&content=FR");
		$salmo = file_get_contents("http://feed.evangelizo.org/reader.php?date=$today&type=reading&lang=SP&content=PS");
		$segunda = file_get_contents("http://feed.evangelizo.org/reader.php?date=$today&type=reading&lang=SP&content=SR");
		$evangelio = file_get_contents("http://feed.evangelizo.org/reader.php?date=$today&type=reading&lang=SP&content=GSP");
		$comentario = file_get_contents("http://feed.evangelizo.org/reader.php?date=$today&type=comment&lang=SP");
		$fecha_s = file_get_contents("http://feed.evangelizo.org/reader.php?date=$today&type=saint&lang=SP");
		$fecha_f = file_get_contents("http://feed.evangelizo.org/reader.php?date=$today&type=feast&lang=SP");
		$primeralectura_t = file_get_contents("http://feed.evangelizo.org/reader.php?date=$today&type=reading_lt&lang=SP&content=FR");
		$salmo_t = file_get_contents("http://feed.evangelizo.org/reader.php?date=$today&type=reading_lt&lang=SP&content=PS");
		$segunda_t = file_get_contents("http://feed.evangelizo.org/reader.php?date=$today&type=reading_lt&lang=SP&content=SR");
		$evangelio_t = file_get_contents("http://feed.evangelizo.org/reader.php?date=$today&type=reading_lt&lang=SP&content=GSP");
		$comentario_t = file_get_contents("http://feed.evangelizo.org/reader.php?date=$today&type=comment_t&lang=SP");
		$comentario_a = file_get_contents("http://feed.evangelizo.org/reader.php?date=$today&type=comment_a&lang=SP");
		$comentario_s = file_get_contents("http://feed.evangelizo.org/reader.php?date=$today&type=comment_s&lang=SP");

		
		$fecha_utf = utf8_encode($fecha);
		$primeralectura_utf = utf8_encode($primeralectura);
		$salmo_utf = utf8_encode($salmo);
		$segunda_utf = utf8_encode($segunda);
		$evangelio_utf = utf8_encode($evangelio);
		$comentario_utf = utf8_encode($comentario);
		$fecha_s_utf = utf8_encode($fecha_s);
		$fecha_f_utf = utf8_encode($fecha_f);
		$primeralectura_t_utf = utf8_encode($primeralectura_t);
		$salmo_t_utf = utf8_encode($salmo_t);
		$evangelio_t_utf = utf8_encode($evangelio_t);
		$comentario_t_utf = utf8_encode($comentario_t);
		$comentario_a_utf = utf8_encode($comentario_a);
		$comentario_s_utf = utf8_encode($comentario_s);
		$segunda_t_utf = utf8_encode($segunda_t);
		
		$primeralectura_utf_sub = substr($primeralectura_utf, 0, -215); 
		$salmo_utf_sub = substr($salmo_utf, 0, -215); 
		$segunda_utf_sub = substr($segunda_utf, 0, -215);;
		$evangelio_utf_sub = substr($evangelio_utf, 0, -215); 
		$comentario_utf_sub = str_replace("evangeliodeldia.org", "", $comentario_utf);  
		$primeralectura_t_utf_sub = substr($primeralectura_t_utf, 0, -215); 
		$salmo_t_utf_sub = substr($salmo_t_utf, 0, -215); 
		$evangelio_t_utf_sub = substr($evangelio_t_utf, 0, -215); 
		$comentario_t_utf_sub = str_replace("evangeliodeldia.org", "", $comentario_t_utf); 
		$comentario_a_utf_sub = str_replace("evangeliodeldia.org", "", $comentario_a_utf); 
		$comentario_s_utf_sub = str_replace("evangeliodeldia.org", "", $comentario_s_utf);  
		$segunda_t_utf_sub = substr($segunda_t_utf, 0, -215); 
	
	$cache["1"] = "
	<div data-role='collapsible-set'>
	<div data-role='collapsible' data-collapsed='false'>
	<h3>Fecha</h3>
	<p>$fecha_utf $fecha_f_utf $fecha_s_utf</p>
	</div>";
	$cache["2"] = "
	<div data-role='collapsible'>
	<h3>Lectio 1</h3>
	<p>$primeralectura_t_utf_sub $primeralectura_utf_sub</p>
	</div>";
	$cache["3"] = "
	<div data-role='collapsible'>
	<h3>Psalmus</h3>
	<p>$salmo_t_utf_sub $salmo_utf_sub</p>
	</div>";
	if($dayweek==0) {
	$cache["4"] = "
	<div data-role='collapsible'>
	<h3>Lectio 2</h3>
	<p>$segunda_t_utf_sub $segunda_utf_sub</p>
	</div>";
	} else {}
	$cache["5"] = "
	<div data-role='collapsible'>
	<h3>Evangelium</h3>
	<p>$evangelio_t_utf_sub $evangelio_utf_sub</p>
	</div>";
	$cache["6"] = "
	<div data-role='collapsible'>
	<h3>Meditatio</h3>
	<p>$comentario_t_utf_sub <br>$comentario_a_utf_sub <br>$comentario_s_utf_sub <br> $comentario_utf</p>
	</div>
</div>";
			file_put_contents($nombre, implode('', $cache));
	?>