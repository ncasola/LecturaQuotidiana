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
		
			echo "<div onclick=\"$('#fecha').toggle(200);\"><b>Fecha</b></div>
			<div id='fecha'>$fecha_utf $fecha_f_utf $fecha_s_utf</div><br>";
			echo "<div onclick=\"$('#primeralectura').toggle(200);\"><b>Lectio 1</b></div>
			<div id='primeralectura'>$primeralectura_t_utf_sub $primeralectura_utf_sub</div>";
			echo "<div onclick=\"$('#salmo').toggle(200);\"><b>Psalmus</b></div>
			<div id='salmo'>$salmo_t_utf_sub $salmo_utf_sub</div><br>";
			if($dayweek==0) {
			echo "<div onclick=\"$('#segunda').toggle(200);\"><b>Lectio 2</b></div>
			<div id='segunda'>$segunda_t_utf_sub $segunda_utf_sub</div><br>"; 
			}
			else {}
			echo "<div onclick=\"$('#evangelio').toggle(200);\"><b>Evangelium</b></div>
			<div id='evangelio'>$evangelio_t_utf_sub $evangelio_utf_sub</div><br>";
			echo "<div onclick=\"$('#comentario').toggle(200);\"><b>Meditatio</b></div>
			<div id='comentario'><div>$comentario_t_utf_sub</div> <div>$comentario_a_utf_sub</div> <div>$comentario_s_utf_sub</div> <div>$comentario_utf</div></div><br>";
	?>
