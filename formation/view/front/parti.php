<?php 

session_start();
include_once '../../config.php';
include_once '../../controller/formationC.php';
include_once '../../controller/participentC.php';
include_once '../../model/participent.php';
$x=0;
$z=0;
$formation=new formationC();
$prod=$formation->afficherdétaillé($_GET['id_formation']);
foreach($prod as $pro){
  $x=$pro['nbr_place'];
  }

  $x--;
  $prod=$formation->Modifiernbr($x,$_GET['id_formation']);




$ser=new part($z,$_SESSION['id'],$_GET['id_formation']);

$type=new participentC();

$th=$type->Ajouterparticipent($ser);


header('location:http://localhost/formation/view/front/meetings.php');


?>
