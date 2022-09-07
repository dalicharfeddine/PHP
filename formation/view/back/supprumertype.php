<?php 

include_once '../../config.php';
include_once '../../controller/typeC.php';


$typec=new typeC();

$prod=$typec->supprimertype($_POST['id_type']);

header('location:http://localhost/may/view/back/table_type.php');

?>


