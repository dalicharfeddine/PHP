<?php 
include_once '../../config.php';
include_once '../../controller/utilisateurC.php';
include_once '../../model/utilisatuer.php';
session_start();
     $_SESSION['ereur'] =0;
if(!isset($_POST['id_utilisateur'])||!isset($_POST['nom'])||!isset($_POST['prenom'])||!isset($_POST['mail'])||!isset($_POST['mdp'])||!isset($_POST['role']))
{
	echo "erreur de ";
}

$x=0;
$hotelc=new utilisateurc();
$prod=$hotelc->afficherutilisateur();

foreach($prod as $pro){
	  if (
            $pro['adresse'] ===$_POST['mail']
          )
	  {
       $x=1; 
         
                 // document.getElementById("msg").innerHTML="Entrez uniquement Le premier chiffre en MAJ";
 
              
       
	  }
else {
 $x=2;


}
}
if($x==1)
{

            $_SESSION['ereur'] =1;
                header('location:http://localhost/may/view/back/Ajouterutilisateur.php');	
}
else if($x==2)
{
$ser=new utilisateur($_POST['id_utilisateur'],$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['mdp'],$_POST['role'],);



$prod=$hotelc->Ajouterutilisateur($ser);

header('location:http://localhost/may/view/back/table-utilisateur.php');	
}

?>
