<?php
class formation{

private $id_formation;
private $nom;
private $date;

private $prix;
private $nbr_place;
private $duree;
private $image;
private $emplacement;
private $id_type;
private $Desc;
public  function __construct($nom,$prix,$nbr_place,$image)
{
    $this->nom=$nom;

    $this->prix=$prix;
    $this->nbr_place=$nbr_place;

    $this->image=$image;



}





public  function getid_formation()
{
	return $this->id_formation;
}
public function getnom()
{
	return $this->nom;
}
public function getdate()
{
	return $this->date;
}

public function getprix()
{
	return $this->prix;
}
public  function getnombre_place()
{
   return $this->nbr_place;
}
public function getduree()
{
   return $this->duree;
}
public function getimage()
{
   return $this->image;
}
public function getemplacement()
{
   return $this->emplacement;
}
public function getid_type()
{
   return $this->id_type;
}
public function getDesc()
{
   return $this->Desc;
}



}


class formation1{


private $id_formation;
private $nom;
private $date;
private $prix;
private $nombre_place;
private $duree;
private $Desc;

public  function __construct($id_formation,$nom,$date,$prix,$nombre_place,$duree,$Desc)
{
   $this->id_formation=$id_formation;
    $this->nom=$nom;
    $this->date=$date;

    $this->prix=$prix;
    $this->nombre_place=$nombre_place;
        $this->duree=$duree;
     $this->Desc=$Desc;

}





public  function getid_formation()
{
   return $this->id_formation;
}
public function getnom()
{
   return $this->nom;
}
public function getdate()
{
   return $this->date;
}

public function getprix()
{
   return $this->prix;
}
public  function getnombre_place()
{
   return $this->nombre_place;
}
public function getduree()
{
   return $this->duree;
}

public function getDesc()
{
   return $this->Desc;
}

}



?>