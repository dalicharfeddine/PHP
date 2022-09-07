<?php 
include_once '../../config.php';
include_once '../../controller/formationC.php';
include_once '../../model/formation.php';

if(!isset($_POST['id_formation'])||!isset($_POST['nom'])||!isset($_POST['date'])||!isset($_POST['prix'])||!isset($_POST['nbr'])||!isset($_POST['duree'])||!isset($_POST['theme'])||!isset($_POST['emplacement'])||!isset($_POST['desce']))
{
	echo "erreur de ";
}

if (isset($_FILES['image']) && $_FILES['image']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['image']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $fileInfo = pathinfo($_FILES['image']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png','jfif'];
                if (in_array($extension, $allowedExtensions))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . basename($_FILES['image']['name']));
                        echo "L'envoi a bien été effectué !.<br>"; 
                      //  echo  'uploads/' . basename($_FILES['screenshot']['name']);
                }
        }
} 





$ser=new formation($_POST['id_formation'],$_POST['nom'],$_POST['date'],$_POST['prix'],$_POST['nbr'],$_POST['duree'],$_FILES['image']['name'],$_POST['emplacement'],$_POST['theme'],$_POST['desce']);



$hotelc=new formationC();

$prod=$hotelc->Ajouterformations($ser);

header('location:http://localhost/may/view/back/table-formation.php');

?>
