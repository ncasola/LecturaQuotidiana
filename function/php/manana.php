<?php
$nombre = "ayer.html";
$ayer  = mktime(0, 0, 0, date("m")  , date("d")-1, date("Y"));
		$today = date( 'Ymd', $ayer ); 
		$dayweek = jddayofweek ( cal_to_jd(CAL_GREGORIAN, date("m"),date("d")-1, date("Y")) , 0 );
		include 'include.php';
		?> 