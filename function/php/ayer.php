<?php
$nombre = "hoy.html";
$today = date('Ymd');
		$dayweek = jddayofweek ( cal_to_jd(CAL_GREGORIAN, date("m"),date("d"), date("Y")) , 0 );
		include 'include.php';
		?> 