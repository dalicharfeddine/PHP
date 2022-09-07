<!DOCTYPE html>
<html>

<?php 

class favorieC{
		function afficherfavorieseul($numse,$uti){
		$sql="SELECT * FROM favorie WHERE `id_formation`= $numse and `id_utilisateur`= $uti ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 
	function afficherfavorie(){
		$sql="SELECT * FROM favorie ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 
	   function supprimerformations($numse){
 $sql="DELETE  FROM favorie WHERE `id_favorie`= $numse ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);

        }catch(Exception $e){
				die("erreur:".$e->getMessage());
   }

}


function Ajouterfavorie($typ){
$sql= "INSERT INTO `favorie` VALUES (:id,:id_ut, :idf)";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
	$recipesStatement->execute([   'id'=>$typ->getid_favorie(), 

		'id_ut' =>$typ->getid_utilisateur(),
		'idf' =>$typ->getid_formateur(),



	]);
 }
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());

}

}
  function Afficherfavorieparutilisateur($numse){
 $sql="SELECT * from formations INNER join favorie on formations.id_formation=favorie.id_formation where favorie.id_utilisateur like '$numse' ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
return $liste;
        }catch(Exception $e){
				die("erreur:".$e->getMessage());
   }

}



}
?>
</html>
