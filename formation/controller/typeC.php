<!DOCTYPE html>
<html>

<?php 

class typeC{
		function afficherdétaillé($numse){
		$sql="SELECT * FROM type WHERE `id_type`= $numse  ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 
	function affichertype(){
		$sql="SELECT * FROM type ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 
	   function supprimertype($numse){
 $sql="DELETE  FROM type WHERE `id_type`= $numse ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);

        }catch(Exception $e){
				die("erreur:".$e->getMessage());
   }

}
function Modifiertype($typ)
{
$sqlc= "UPDATE `type` SET theme=:thm WHERE id_type=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
	$recipesStatement->execute(['thm' =>$typ->gettheme(),
		            
		              
	  'id'=>$typ->getid_type(),
		         ]);
}
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());
}

} 

function Ajoutertype($typ){
$sql= "INSERT INTO `type` VALUES (:id,:typ, :them)";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
	$recipesStatement->execute([   'id'=>$typ->getid_type(), 

		'typ' =>$typ->gettype(),
		'them' =>$typ->gettheme(),



	]);
 }
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());

}

}


}
?>
</html>
