<?php
	include("conexion.php");
	print_r($_POST);
	$id = $_POST["id"];
	$link = $_POST["link"];

	$query = "UPDATE article_images SET link = '" . $link . "' WHERE id_articulo = " . $id;
	mysql_query($query);

	echo $query;
	echo "Edición de link correctamente";


 ?>