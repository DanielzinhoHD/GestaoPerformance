<?php

namespace Src\Classes;

use Src\Traits\TraitUrlParser;

class ClassRoutes{

  use TraitUrlParser;

  private $Rota;

  #Retorna a rota;
  public function getRota(){
    $url=$this->parseUrl();
    $i=$url[0];

    $this->Rota=array(
      ""=>"ControllerHome",
      "home"=>"ControllerHome",
      "sitemap"=>"ControllerSitemap"
    );

    if(array_key_exists($i, $this->Rota)){
      if(file_exists(DIRREQ."app/controller/{$this->Rota[$i]}.php")){
        return $this->Rota[$i];
      }else{
        return "ControllerHome";
      }
    }else{
      return "ControllerHome";
    }
  }

}