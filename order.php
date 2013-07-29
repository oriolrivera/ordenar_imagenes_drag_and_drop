<?php
include("conexion.php");
// aquí ordenaremos los articulos con ajax

// array con el nuevo orden de nuestros registros
$articulos_ordenados 	= $_POST['articulo'];

$pos = 1;
foreach ($articulos_ordenados as $key) {

	// actualizamos el campo orden_articulo
	$query = "UPDATE article_images SET orden_articulo = " . $pos . " WHERE id_articulo = " . $key;
	mysql_query($query);

	$pos++;
}

echo "Posición de la imagen ordenada con exito";
?>