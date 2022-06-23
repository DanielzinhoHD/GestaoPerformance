<?php

namespace App\Controller;
use Src\Classes\classRender;
use App\Model\ClassRegistro;

Class ControllerRegistro extends ClassRegistro{
    protected $nome;
    protected $email;
    protected $pw;
    protected $pw2;

    public function __construct()
    {
        if(isset($_POST['submit'])){
            $isSubmitted = $_POST['submit'];
        }
        if(isset($_SESSION['id'])){
            if(file_exists(DIRREQ.'App\Controller\ControllerHome.php')){
                header('location: '.DIRPAGE);
                exit();
                
            }
            else{
                echo 'Você já está logado ';
            }
        }
        else
        {
            if(!isset($isSubmitted)){
                $Render = new classRender;
                $Render->setDescription("Página de Cadastro");
                $Render->setKeywords("cabeamento,smartfast,performance");
                $Render->setTitle("Smartfast Cadastro");
                $Render->setDir("cadastro/");
                $Render->renderLayout(); 
            }
        }
    }
    public function ReceberVariaveis()
    {
        if(isset($_POST['nome'])){
            $this->nome=filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(isset($_POST['email'])){
            $this->email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(isset($_POST['senha'])){
            $this->senha=filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(isset($_POST['Confirmarsenha'])){
            $this->Confirmarsenha=filter_input(INPUT_POST, 'Confirmarsenha', FILTER_SANITIZE_SPECIAL_CHARS);
        }
    }
    public function Cadastrar()
    {
        $this->ReceberVariaveis();

        parent::pwdMatch($this->pw,$this->pw2);

        parent::createUser($this->nome,$this->email,$this->pw);
    }
}