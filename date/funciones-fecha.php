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
echo "\n";

// Diferencia de tiempo
$today = new DateTime();
$tonny_birth = new DateTime("1991-03-20");
$interval = $tonny_birth->diff($today);
echo $interval->format("%y años con %d días");
echo "\n";


// Crear desde un formato dado
// $date = DateTime::createFromFormat("l j F y", "Sunday 17 April 2022");
// echo $date->format("Y-m-d H:i:s");
// echo "\n";


//Modificar una fecha
$fecha = new DateTime();
$fecha->modify("+1 day");
echo $fecha->format("Y-m-d H:i:s");
echo "\n";
