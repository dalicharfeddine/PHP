<?php
class type{
   
private $id_type;
private $type;
private $theme;



public  function __construct($id_type,$type,$theme)
{
   $this->id_type=$id_type;
    $this->type=$type;

    
    $this->theme=$theme;


 


}





public  function getid_type()
{
   return $this->id_type;
}
public function gettype()
{
   return $this->type;
}

public function gettheme()
{
   return $this->theme;
}




}


?>