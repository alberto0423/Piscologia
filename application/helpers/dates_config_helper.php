<?php
function fecha_hoy($english_format = FALSE)
{
	date_default_timezone_set('America/Mexico_City');
	if($english_format) {
		return date("Y/m/d H:i:s");
	} else {
		return date("Y/m/d H:i:s");
	}


}
