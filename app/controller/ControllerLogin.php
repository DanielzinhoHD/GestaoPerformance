<?php

namespace App\Controller;
use Src\Classes\classRender;
use Src\Interfaces\InterfaceView;
use App\Model\ClassLogin;

session_start();

class ControllerLogin extends ClassLogin{

  protected $email;
  protected $pw;

  public function __construct()
  {
    if(isset($_SESSION['userId'])){
      if(file_exists(DIRREQ."app/controller/ControllerHome.php")){
      // Redireciona usuário pra tela inicial se já estiver logado;
        header("Location: ".DIRPAGE);
          exit();
      }else{
        echo 'Você já está logado!';
      }
    }else{
      $Render = new classRender;
      $Render->setDescription("Página de login");
      $Render->setKeywords("cabeamento,smartfast,performance");
      $Render->setTitle("Smartfast Login");
      $Render->setDir("login/");
      $Render->renderLayout();
    }
  }

  public function receberVariaveis()
  {
    if(isset($_POST['name'])){
      $this->name=filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['pw'])){
      $this->pw=filter_input(INPUT_POST, 'pw', FILTER_SANITIZE_SPECIAL_CHARS);
    }
  }

  public function login()
  {
    $this->receberVariaveis();

    parent::loginUser($this->email, $this->pw);
  }
}