
<?php 
  ob_start();
include_once '../../config.php';
include_once '../../controller/utilisateurC.php';
session_start();

$x=0;

 $_SESSION['email']=0;
$hotelc=new utilisateurc();

$prod=$hotelc->afficherutilisateurcat("participent");

foreach($prod as $pro){
	  if (
            $pro['adresse'] ===$_POST['mail'] 
            
        )
	  {
     $x=1;
     $_SESSION['email']=1;
     $_SESSION['id']=$pro['id_utilisateur'];
	  break;
    
  }
	  else {
	 $x=2;
          $_SESSION['email']=2; 
        }
}
if($x==1)
{
 $destinataire =$_POST['mail']; 
$sujet = "Mot de passe oublier"; // sujet du mail
$message ="http://localhost/may/view/front/newmdp.PHP"; 
mail ($destinataire, $sujet, $message);
                  header('location:http://localhost/formation/view/front/mspoub.php');
}
else if($x==2)
{
		  header('location:http://localhost/formation/view/front/mspoub.php');
}


	









 ob_end_flush();

?>
