<?php 

include_once '../../config.php';
include_once '../../controller/reservationC.php';


$hotelc=new reservationc();

$prod=$hotelc->supprimerreservation($_POST['id_reservation']);

header('location:http://localhost/latifa/view/back/table-reservation.php');

?>


