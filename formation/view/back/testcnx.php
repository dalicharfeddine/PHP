<?php 
  ob_start();
include_once '../../config.php';
include_once '../../controller/utilisateurC.php';
session_start();




$hotelc=new utilisateurc();

$prod=$hotelc->afficherutilisateur();

foreach($prod as $pro){
	  if (
            $pro['adresse'] ===$_POST['mail'] &&
            $pro['mdp'] ===$_POST['mdp'] 
            
        )
	  {
     if($pro['role']=="Admin")
       {

	  	 $loggedUser = [
                'email' => $pro['adresse'],
            ];
              $_SESSION['LOGGED_USER'] = $loggedUser['email'];
                $_SESSION['role'] =1;
                  header('location:http://localhost/may/view/back');
	  }
    else if($pro['role']=="Formateur")
    {

       $loggedUser = [
                'email' => $pro['adresse'],
            ];
              $_SESSION['LOGGED_USER'] = $loggedUser['email'];
                $_SESSION['role'] =2;
                  header('location:http://localhost/may/view/back/index.php');
    }
  }
	  else {
	  	include_once('connexion.php');
        
        }

	


}






 ob_end_flush();

?>
