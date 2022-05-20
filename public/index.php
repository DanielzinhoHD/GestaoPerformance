<?php

header("Content-Type: text/html; charset=utf-8");
require_once("../config/config.php");
require_once("../src/vendor/autoload.php");

// include(DIRREQ."app/view/layout.php");

// use App\teste;
use Src\Classes\ClassRoutes;

$dispatch = new App\Dispatch();

// $teste = new teste();
// echo DIRPAGE;

// $con = new App\Model\ClassConexao();

// var_dump($con->conexaoDB());

