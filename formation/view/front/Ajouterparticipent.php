<?php 
include_once '../../config.php';
include_once '../../controller/utilisateurC.php';
include_once '../../model/utilisateur.php';
session_start();
     $_SESSION['ereur'] =0; 
if($_POST['mdp']==$_POST['mdp1'])
{

    

if(!isset($_POST['nom'])||!isset($_POST['prenom'])||!isset($_POST['email'])||!isset($_POST['mdp']))
{
	echo "erreur de ";
}

$x=0;
$hotelc=new utilisateurc();
$prod=$hotelc->afficherutilisateur();

foreach($prod as $pro){
	  if (
            $pro['adresse'] ===$_POST['email']
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
                 header('location:http://localhost/may/view/front/compte.php');    
}
else if($x==2)
{

$ser = new utilisateur('', $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mdp'], "utilisateur");



$prod=$hotelc->Ajouterutilisateur($ser);

header('location:http://localhost/may/view/front/meetings.php');	
}

}
else 
{
     $_SESSION['ereur'] =1;

  header('location:http://localhost/may/view/front/compte.php');    
}
?>
