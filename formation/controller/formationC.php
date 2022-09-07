<!DOCTYPE html>
<html>

<?php 

class formationC{
	function afficherdétaillé($numse){
		$sql="SELECT * FROM formations WHERE `id_formation`= $numse  ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 
	function afficherformations(){
		$sql="SELECT * FROM formations ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 
		function afficherformationssup0(){
		$sql="SELECT * FROM formations where nbr_place >0";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 
	

	   function supprimerformation($numse){
 $sql="DELETE  FROM formations WHERE `id_formation`= $numse ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);

        }catch(Exception $e){
			die("erreur:".$e->getMessage());
   }
}
function Modifierformation($format)
{
$sqlc= "UPDATE `formations` SET Nom=:nome,dat=:datt,prix=:prx,nbr_place=:nbr_place,duree=:dure,description=:desce WHERE id_formation=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
	$recipesStatement->execute(['nome'=>$format->getnom(),
		               'datt'=>$format->getdate(),
		           
		            'prx'=>$format->getprix(),
		                'nbr_place'=>$format->getnombre_place(),
 'dure'=>$format->getduree(),
 'desce'=>$format->getDesc(),
		              
	  'id'=>$format->getid_formation(),
		         ]);
}
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());
}

} 

function Modifiernbr($nbr,$id)
{
$sqlc= "UPDATE `formations` SET nbr_place=:nbr_place WHERE id_formation=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
	$recipesStatement->execute([
		                'nbr_place'=>$nbr,
		              
	  'id'=>$id,
		         ]);
}
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());
}

} 

function Modifierview($id,$pos,$neg)
{
$sqlc= "UPDATE `formations` SET positive=:pos,negative=:neg WHERE id_formation=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
	$recipesStatement->execute([
		                'pos'=>$pos,
		           'neg'=>$neg,    
	  'id'=>$id,
		         ]);
}
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());
}

} 

function Ajouterformations($format){
$sql= "INSERT INTO `formations` VALUES (:id,:nom, :dat, :prix,:nbr,:dure,:image,:emp,:id_type,:desce,:pos,:neg)";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
	$recipesStatement->execute([ 'id'=>$format->getid_formation(),
		            'nom' =>$format->getnom(),
		              'dat'=>$format->getdate(),
		            'prix'=>$format->getprix(),
		           
		            'nbr'=>$format->getnombre_place(),
		                'dure' =>$format->getduree(),
		                   'image'=>$format->getimage(),
		           
		            'emp'=>$format->getemplacement(),
		                'id_type'=>$format->getid_type(),
		'desce'=>$format->getDesc(),

 'pos'=>0,
		'neg'=>0,

	]);
 }
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());

}
	

}
function triparprix(){
		$sql="SELECT * FROM formations order by prix ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 

function recherche($search_value)
    {
        $sql="SELECT * FROM formations where ( id_formation like '%$search_value%' or Nom like '%$search_value%' or prix like '%$search_value%' or duree like '%$search_value%' )";

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
function Filtre($search_value)
    {
        $sql="SELECT * from formations INNER join type on formations.id_type=type.id_type WHERE type.type like'$search_value' ";

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
