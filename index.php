<?php
include("conexion.php");

$query = mysql_query("SELECT * FROM article_images ORDER BY orden_articulo");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ordenar imagenes con Ajax y efecto Drag'n Drop</title>

<link rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="js/scripts.js"></script>


<script type="text/javascript">


</script>
</head>

<body>


<div class="content">
	<h3>Ordenar imagenes con Ajax y efecto Drag'n Drop</h3>

	<form action="">
		<input type="text" name="imgLink" id="imgLink" placeholder="Click en imagen para ver link" />
		<input type="hidden" name="getIdLink" id="getIdLink" />
		<input type="button" id="editLink" value="Editar link"/>

	</form>

	<ul id="articulos">
    	<?php
		while($row = mysql_fetch_array($query))
		{
			?>
			<li id="articulo-<?php echo $row['id_articulo'] ?>">
				<img src="img/<?php echo $row['nombre_articulo'] ?>" alt="" title="Clic para editar link o arrastra a la posición" onclick="getLink('<?php echo $row['link']; ?>','<?php echo $row['id_articulo'] ?>');" class="edit_link" />
			</li>
			<?php
		}
		?>
    </ul>
    <div class="msg"></div>
</div>

</body>
</html>
