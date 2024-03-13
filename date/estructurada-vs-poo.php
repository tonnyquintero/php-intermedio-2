<?php

//Por procedimientos / estruturadas / funciones
$fechaActual=date_create();
$Intervalo=date_interval_create_from_date_string("5 days");
date_add($fechaActual,$Intervalo);
echo date_format($fechaActual,"Y-m-d");

echo "\n";

//Procedimiento mediante OOP
$_fechaActual=new DateTime();
$_intervalo=DateInterval::createFromDateString("5 days");
$_fechaActual->add($_intervalo);
echo $_fechaActual->format("Y-m-d");