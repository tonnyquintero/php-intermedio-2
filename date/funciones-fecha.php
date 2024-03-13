<?php

//Establecer la zona horaria
date_default_timezone_set("America/Argentina/Buenos_Aires");

//Obtener la fecha actual
 $now = date("Y-m-d H:i:s");


//strtotime
echo strtotime($now);
//echo strtotime("17 april 2020");
//echo strtotime("+1 day");
//echo strtotime("next Monday");
//echo strtotime("last Wednesday");

$unix_time_last_wednesday = strtotime("last Wednesday");
echo date("Y-m-d H:i:s", $unix_time_last_wednesday); 

//Fechas inmutables
$date_inmutable = new DateTimeImmutable();