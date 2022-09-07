<?php
  ob_start();
include_once '../../config.php';
include_once '../../controller/utilisateurC.php';
session_start();




$hotelc=new utilisateurc();

$prod=$hotelc->afficherutilisateurcat("participent");

foreach($prod as $pro){
	  if (
            $pro['adresse'] ===$_POST['mail'] &&
            $pro['mdp'] ===$_POST['mdp']

        )
	  {
      $loggedUser = [
                'email' => $pro['adresse'],
            ];
              $_SESSION['LOGGED_USER'] = $loggedUser['email'];
              $_SESSION['id']=$pro['id_utilisateur'];
                $_SESSION['rol'] =1;
                  header('location:http://localhost/formation/view/front/meetings.PHP');


  }
	  else {
	  	include_once('conn.php');

        }




}






 ob_end_flush();

?>
