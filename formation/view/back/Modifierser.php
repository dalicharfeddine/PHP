<?php 
include_once '../../config.php';
include_once '../../controller/formationC.php';
include_once '../../model/formation.php';

if(!isset($_POST['id_formation'])||!isset($_POST['nom'])||!isset($_POST['date'])||!isset($_POST['prix'])||!isset($_POST['nbr'])||!isset($_POST['duree'])||!isset($_POST['description']))
{
	echo "erreur de ";
}


$ser=new formation1($_POST['id_formation'],$_POST['nom'],$_POST['date'],$_POST['prix'],$_POST['nbr'],$_POST['duree'],$_POST['description']);



$formation=new formationC();

$prod=$formation->Modifierformation($ser);

header('location:http://localhost/may/view/back/table-formation.php');




?>