<?php

/*Crear TABLE

CREATE TABLE `article_images` (
`id_articulo` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`id_articulo` VARCHAR( 100 ) NOT NULL ,
`nombre_articulo` VARCHAR( 50 ) NOT NULL ,
`orden_articulo` INT NOT NULL
);

*/

$cn = mysql_connect("localhost","user","password");
mysql_select_db("drog_and_drop_images", $cn);

?>