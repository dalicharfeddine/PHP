<!DOCTYPE html>
<html>

<?php 

class participentC{
		function affichernompart(){
		$sql="SELECT nom from participent JOIN utilisateur on utilisateur.id_utilisateur=participent.id_utilisateur ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 
	function afficherparticipent(){
		$sql="SELECT * FROM participent ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 
	   function supprimerparticipent($numse){
 $sql="DELETE  FROM participent WHERE `id_participent`= $numse ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);

        }catch(Exception $e){
				die("erreur:".$e->getMessage());
   }

}


function Ajouterparticipent($typ){
$sql= "INSERT INTO `participent` VALUES (:id,:id_ut, :idf)";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
	$recipesStatement->execute([   'id'=>$typ->getid_participent(), 

		'id_ut' =>$typ->getid_utilisateur(),
		'idf' =>$typ->getid_formateur(),



	]);
 }
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());

}

}


}
?>
</html>
