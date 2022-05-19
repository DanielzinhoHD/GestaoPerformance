<?php

header("Content-Type: text/html; charset=utf-8");
require_once("../config/config.php");
require_once("../src/vendor/autoload.php");

// use App\teste;
use Src\Classes\ClassRoutes;

// $teste = new teste();
// echo DIRPAGE;

// $con = new App\Model\ClassConexao();

// var_dump($con->conexaoDB());

class Teste extends ClassRoutes{

  public function __construct()
  {
    $a = $this->getRota();
    var_dump($a);
  }
}

$teste = new Teste();