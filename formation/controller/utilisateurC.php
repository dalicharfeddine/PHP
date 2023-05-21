<!DOCTYPE html>
<html>

<?php 

class utilisateurc{
	function afficherdétaillé($numse){
		$sql="SELECT * FROM utilisateur WHERE `id_utilisateur`= $numse  ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 



 function afficherutilisateurcat($search_value){
 		$sql="SELECT * FROM utilisateur where 	(role like '$search_value' )";

        //global $db;
        $db =Config::getConnexion();

        try{
            $result=$db->query($sql);

            return $result;

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
 }

function connexionusers($mail, $md)
   {
        $sql="SELECT * FROM utilisateur where 	(adresse like '$mail' and mdp like '$md') ";

        //global $db;
        $db =Config::getConnexion();

        try{
            $result=$db->query($sql);

            return $result;

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    } 
	function afficherutilisateur(){
		$sql="SELECT * FROM utilisateur ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 
	   function supprimerutilisateur($numse){
 $sql="DELETE  FROM utilisateur WHERE `id_utilisateur`= $numse ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);

        }catch(Exception $e){
		die("erreur:".$e->getMessage());
     
        }
  
}
function Modifierutilisateur($ser)
{
$sqlc= "UPDATE `utilisateur` SET nom=:nome,prenom=:pre,adresse=:adrs WHERE id_utilisateur=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
	$recipesStatement->execute(['nome' =>$ser->getnom(),
		             'pre'=>$ser->getprenom(),
		               'adrs'=>$ser->getadresse(),
	  'id'=>$ser->getid_utilisateur(),
		         ]);
}
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());
}

} 




function Modifiermdp($mdp,$id)
{
$sqlc= "UPDATE `utilisateur` SET mdp=:mdp WHERE id_utilisateur=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
	$recipesStatement->execute([
		                'mdp'=>$mdp,
		              
	  'id'=>$id,
		         ]);
}
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());
}

} 
function Ajouterutilisateur($ser) {
$sql = "INSERT INTO utilisateur (nom, prenom, adresse, mdp) VALUES (:nom, :prenom, :adresse, :mdp)";
    $db = config::getConnexion();

    try {
        $statement = $db->prepare($sql);
        $statement->execute([
            'nom' => $ser->getnom(),
            'prenom' => $ser->getprenom(),
            'adresse' => $ser->getadresse(),
            'mdp' => $ser->getmdp(),
        ]);
        
        echo "Utilisateur ajouté avec succès !";
    } catch(Exception $e) { 
        die("Erreur : ".$e->getMessage());
    }
}


function recherche($search_value)
    {
        $sql="SELECT * FROM utilisateur where ( id_utilisateur like '%$search_value%' or nom like '%$search_value%' or prenom like '%$search_value%' or adresse like '%$search_value%' )";

        //global $db;
        $db =Config::getConnexion();

        try{
            $result=$db->query($sql);

            return $result;

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

}
?>
</html>
