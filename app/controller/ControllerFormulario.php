<?php

namespace App\Controller;

use Src\Classes\classRender;
use App\Model\ClassFormulario;


class ControllerFormulario extends ClassFormulario{

  protected $userId;
  protected $clientId;

  public function __construct()
  {
    if(isset($_POST['change'])){
      $isChange = $_POST['change'];
    }

    if(!isset($_SESSION['id'])){
      if(file_exists(DIRREQ."app/controller/ControllerHome.php")){
      // Redireciona usuário pra tela inicial se já estiver logado;
        header("Location: ".DIRPAGE);
        exit();
      }else{
        echo 'Você não está logado!';
      }
    }
    else{
      if(!isset($isChange)){
        $Render = new classRender;
        $Render->setDescription("Página preenchimento do formulario");
        $Render->setKeywords("cabeamento,smartfast,performance");
        $Render->setTitle("Smartfast Formulario");
        $Render->setDir("formulario/");
        $Render->renderLayout();
      }
    }
  }

  public function receberUserId()
  {
    $this->userId = $_SESSION['id'];
  }

  public function receberClientId()
  {
    $this->clientId = $_POST['clientId'];
  }

  public function retornaClientes()
  {
    $this->receberUserId();
    return parent::selecionaClientes($this->userId);
  }

  public function retornaInfraEstrutura()
  {
    return parent::selecionaInfraEstrutura();
  }

  public function retornaCabeamento()
  {
    return parent::selecionaCabeamento();
  }

  public function retornaConector()
  {
    return parent::selecionaConector();
  }

  public function retornaProjeto()
  {
    $this->receberUserId();
    $this->receberClientId();

    echo parent::selecionaProjeto($this->userId, $this->clientId);
  }
}
