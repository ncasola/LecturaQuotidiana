<?php
		
		$var_get_about = $_POST['about'];
		$var_get_ayer = $_POST['var_ayer'];
		$var_get_hoy = $_POST['var_hoy'];
		$var_get_manana = $_POST['var_manana'];
		
		if($var_get_ayer) {
		$ayer  = mktime(0, 0, 0, date("m")  , date("d")-1, date("Y"));
		$today = date( 'Ymd', $ayer ); 
		$dayweek = jddayofweek ( cal_to_jd(CAL_GREGORIAN, date("m"),date("d")-1, date("Y")) , 0 ); 
  		include 'include.php';

			}
			elseif($var_get_hoy) {
		$today = date('Ymd');
		$dayweek = jddayofweek ( cal_to_jd(CAL_GREGORIAN, date("m"),date("d"), date("Y")) , 0 );
  		include 'include.php';

			}
			elseif($var_get_manana) {

		$manana  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
		$today = date( 'Ymd', $manana );  
		$dayweek = jddayofweek ( cal_to_jd(CAL_GREGORIAN, date("m"),date("d")+1, date("Y")) , 0 );
		include 'include.php';

			}
		elseif($var_get_about) {
		echo "<hr />
Esta pagina surge como la iniciativa de un cristiano joven por ofrecer a la comunidad un medio facil y rapido de accerder a las lecturas diarias. En internet podemos encontrar multitud de paginas con las lecturas, comentarios, santoral de cada dia, pero no siempre tan accesible como deseara, sobre todo respecto a dispositivos moviles. Por ese motivo esta pagina quiere aportar su granito de arena y ser ligera y facil de usar, para permitir su visualizacion en cualquier dispositivo. Dejo unas indicaciones rapidas sobre el manejo de la pagina:
<ul><li>Cuando se aprieta un boton, se carga automaticamente en la misma pagina las lecturas y los botones con cada dia quedan ocultos</li>
<li>Si quiere volver a mostrar los dias solo tiene que darle al boton ``Mostrar/ocultar dias´´ y las lecturas se ocutaran.</li>
<li>Como regla general, lo que se oculta con un boton se muestra con ese mismo, y viceversa.</li>
<b>Muchas gracias por pasar, y que Dios les bendiga.</b> Ah, y no se olviden de compartir y recomendar <b>Quotidiana.</b>
</ul>";
}
		else {
		echo "<div id=\"Wrong\" class=\"box contenido\">
			<hr />
			Algo no funciona...
			</div>";
}
	?>
