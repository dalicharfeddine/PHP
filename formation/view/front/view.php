<?php 
include_once '../../config.php';
include_once '../../controller/formationC.php';
include_once '../../model/formation.php';



$formation=new formationC();
$prod=$formation->afficherdétaillé($_GET['id']);
foreach($prod as $pro){
  $z=$pro['positive'];
    $y=$pro['negative'];
  }
if($_GET['x']==1)
{
	$z++;
}else
{
	$y++;
}




$test=$formation->Modifierview($_GET['id'],$z,$y);

header('location:http://localhost/formation/view/front/meetings.PHP');




?>