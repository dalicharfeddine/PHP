<?php 

include_once '../../config.php';
include_once '../../controller/formationC.php';


$hotelc=new formationC();

$prod=$hotelc->supprimerformation($_POST['id_formation']);

header('location:http://localhost/may/view/back/table-formation.php');

?>


