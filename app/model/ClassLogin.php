<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassLogin extends ClassConexao{
  
  // private $db=$this->conexaoDB();
  private $db;

// Função que verifica se email existe (retorna o email se existir, caso contrário retorna false);
  protected function existingEmail($email)
  {
    $sql = "SELECT * FROM usuarios WHERE email = ?;";
    
    $stmt = $this->db->conexaoDB()->prepare($sql);
    $stmt->execute(array($email));
    $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    $stmt = null;
    
    return $result;
  }

// Função para login;
  protected function loginUser($email, $pw)
  {
    $userEmail = self::existingEmail($email);
  
  // Verifica se usuário existe;
    if($userEmail === false){
      echo '<p class=error-msg>Email não existe!</p>';
      exit();
    }else{
      $hashedPw = $userEmail['senha'];
      $checkedPw = password_verify($pw, $hashedPw);
    
    // Verifica se as senhas são iguais;
      if($checkedPw === false){
        echo '<p class=error-msg>Senha errada!</p>';
        exit();
      }else if($checkedPw === true){
        session_start();
        $_SESSION["id"] = $userEmail["idUsuarios"];
        $_SESSION["name"] = $userEmail["nome"];
        header("Location: ".DIRPAGE);
        exit();
      }
    }
  }


}