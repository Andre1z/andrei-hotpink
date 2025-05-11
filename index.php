<?php

	include "andrei_hotpink.php";
	
	hotpink::deMySQL("localhost","andrei","Oldlace.123","proyectoapple","categorias")->aCSV("salida.csv");
	hotpink::deMySQL("localhost","andrei","Oldlace.123","proyectoapple","categorias")->aXML("salida.xml");
	hotpink::deMySQL("localhost","andrei","Oldlace.123","proyectoapple","categorias")->aJSON("salida.json");
	hotpink::deMySQL("localhost","andrei","Oldlace.123","proyectoapple","categorias")->aSQLite("salida.sqlite3");

?>
