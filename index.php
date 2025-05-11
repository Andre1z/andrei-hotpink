<?php
    include "andrei_hotpink.php";

    // Creamos una única instancia para no repetir la consulta a la base de datos
    $datos = hotpink::deMySQL("localhost", "andrei", "Oldlace.123", "proyectoapple", "categorias");

    // Generamos los archivos de salida
    $datos->aCSV("salida.csv");
    $datos->aXML("salida.xml");
    $datos->aJSON("salida.json");
    $datos->aSQLite("salida.sqlite3");

    echo "<h1>Archivos de salida generados</h1>";

    // Array con los nombres de los archivos de texto
    $archivos = [
        "CSV"  => "salida.csv",
        "XML"  => "salida.xml",
        "JSON" => "salida.json"
    ];

    // Mostrar en pantalla el contenido de los archivos de texto
    foreach ($archivos as $tipo => $archivo) {
        echo "<h2>Contenido de $archivo ($tipo)</h2>";
        if (file_exists($archivo)) {
            // Se usa htmlspecialchars para evitar problemas con caracteres especiales al mostrar código
            echo "<pre>" . htmlspecialchars(file_get_contents($archivo)) . "</pre>";
        } else {
            echo "<p>Error: El archivo $archivo no existe.</p>";
        }
    }

    // Para el archivo SQLite se muestra un enlace de descarga, ya que es un archivo binario
    echo "<h2>Archivo SQLite</h2>";
    if (file_exists("salida.sqlite3")) {
        echo "<p><a href='salida.sqlite3' download>Descargar salida.sqlite3</a></p>";
    } else {
        echo "<p>Error: El archivo salida.sqlite3 no existe.</p>";
    }
?>