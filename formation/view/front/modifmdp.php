<?php 
include_once '../../config.php';
include_once '../../controller/utilisateurC.php';
include_once '../../model/utilisatuer.php';

session_start();





$hotelc=new utilisateurc();

$prod=$hotelc->Modifiermdp($_POST['mdp'],$_SESSION['id']);

header('location:http://localhost/may/view/front/meetings.PHP');




?>
