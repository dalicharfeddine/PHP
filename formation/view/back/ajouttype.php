<?php 
include_once '../../config.php';
include_once '../../controller/typeC.php';
include_once '../../model/type.php';

if(!isset($_POST['id_type'])||!isset($_POST['type'])||!isset($_POST['theme']))
{
	echo "erreur de ";
}

$ser=new type($_POST['id_type'],$_POST['type'],$_POST['theme']);



$type=new typeC();

$prod=$type->Ajoutertype($ser);

header('location:http://localhost/may/view/back/table_type.php');

?>
