<?php
include_once '../../config.php';
include_once '../../controller/favorieC.php';
include_once '../../model/favorie.php';
session_start();

$ser=new favorie($_GET['id_fav'],$_SESSION['id'],$_GET['id_formation']);
$type=new favorieC();
$prod=$type->Ajouterfavorie($ser);



header('location:http://localhost/formation/view/front/meetings.PHP');

?>
