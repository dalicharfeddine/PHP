<?php
class part{
   
private $id_participent;
private $id_utilisateur;
private $id_formateur;



public  function __construct($id_participent,$id_utilisateur,$id_formateur)
{
   $this->id_participent=$id_participent;
    $this->id_utilisateur=$id_utilisateur;

    
    $this->id_formateur=$id_formateur;


 


}





public  function getid_participent()
{
   return $this->id_participent;
}
public function getid_utilisateur()
{
   return $this->id_utilisateur;
}

public function getid_formateur()
{
   return $this->id_formateur;
}




}


?>