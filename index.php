<h1>hola mundo</h1>

<?php 
require_once './Celda.php';
require_once './tableroClases.php';
$tablero = new tableroClases(array()) ;
$celda= new Celda();

$celda->setNum(4);

echo "probando la celda ".$celda->getNum();


?>

