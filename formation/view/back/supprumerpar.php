<?php 

include_once '../../config.php';
include_once '../../controller/participentC.php';


$hotelc=new participentC();

$prod=$hotelc->supprimerparticipent($_POST['id_participent']);

header('location:http://localhost/may/view/back/table-participent.php');

?>


