Proyecto: andrei-hotpink
=========================

Descripción:
-------------
Este proyecto está diseñado para convertir datos provenientes de una base de datos MySQL a diversos formatos: CSV, XML, JSON y SQLite. La funcionalidad se implementa a través de una serie de clases PHP que encapsulan la conversión a cada uno de los formatos, facilitando la reutilización y extensión del código.

Estructura del Proyecto:
-------------------------
C:\xampp\htdocs\andrei-hotpink\andrei-hotpink-main
├── .gitignore       -> Lista de archivos ignorados por Git.
├── README.txt       -> Este archivo, que describe el proyecto.
├── andrei_hotpink.php  -> Núcleo del proyecto: contiene la clase “hotpink” y los conversores (JSONConverter, CSVConverter, XMLConverter, MySQLConverter y SQLiteConverter).
├── index.php        -> Archivo principal que utiliza la clase hotpink para generar archivos de salida a partir de una fuente MySQL.
├── salida.csv       -> Archivo generado en formato CSV.
├── salida.json      -> Archivo generado en formato JSON.
├── salida.sqlite3   -> Archivo generado en formato SQLite.
└── salida.xml       -> Archivo generado en formato XML.

Requerimientos e Instalación:
-----------------------------
1. Servidor web (por ejemplo, XAMPP) con PHP (7.0 o superior recomendado).
2. Acceso a una base de datos MySQL con los siguientes detalles (según index.php):
   - Servidor: ""
   - Usuario: ""
   - Contraseña: ""
   - Base de datos: ""
   - Tabla: categorias
3. Configurar la base de datos y asegurarse de que la tabla "X" tenga datos válidos para la conversión.
4. Permisos apropiados en el servidor para lectura y escritura de archivos, ya que el script creará archivos de salida en el directoSrio del proyecto.

Uso:
----
1. Modifica, si es necesario, las credenciales y parámetros de conexión en el archivo "index.php".
2. Ejecuta "index.php" a través de tu servidor web (por ejemplo, accediendo a http://localhost/andrei-hotpink/andrei-hotpink/index.php).
3. El script realizará lo siguiente:
   - Conectarse a la base de datos MySQL y obtener todos los datos de la tabla "categorias".
   - Convertir los datos obtenidos a los formatos CSV, XML y JSON, guardándolos en archivos llamados "salida.csv", "salida.xml" y "salida.json" respectivamente.
   - Crear un archivo SQLite ("salida.sqlite3") con los mismos datos.
4. Además, el script está configurado para mostrar en pantalla el contenido de los archivos CSV, XML y JSON, y ofrece un enlace para descargar el archivo SQLite.

Consideraciones Finales:
-------------------------
- **Control de Errores:**  Se recomienda incorporar validaciones adicionales (por ejemplo, verificar si la tabla contiene datos o controlar errores de conexión) para entornos de producción.
- **Seguridad:** Las credenciales de la base de datos están incluidas de manera directa en el código. Para proyectos reales, es preferible utilizar variables de entorno o un archivo de configuración fuera del repositorio.
- **Modularidad:** El diseño orientado a objetos permite extender el proyecto agregando nuevos conversores o funcionalidades sin grandes cambios en la estructura existente.

Autor:
------
andrei

Licencia:
---------
Licencia MIT

Notas:
------
Este proyecto sirve como base para la conversión y migración de datos entre distintos formatos, facilitando la interoperabilidad y el análisis en diferentes entornos. Se puede ampliar para incluir interfaces gráficas, procesamiento en tiempo real u otras funcionalidades según las necesidades del proyecto.