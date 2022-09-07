<?php
class favorie{
   
private $id_favorie;
private $id_utilisateur;
private $id_formateur;



public  function __construct($id_favorie,$id_utilisateur,$id_formateur)
{
   $this->id_favorie=$id_favorie;
    $this->id_utilisateur=$id_utilisateur;
     $this->id_formateur=$id_formateur;
}





public  function getid_favorie()
{
   return $this->id_favorie;
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