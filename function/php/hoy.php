<?php
$nombre = "manana.html";
$manana  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
		$today = date( 'Ymd', $manana );  
		$dayweek = jddayofweek ( cal_to_jd(CAL_GREGORIAN, date("m"),date("d")+1, date("Y")) , 0 );
		include 'include.php';
		?> 