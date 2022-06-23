<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassRegistro extends ClassConexao {
    private $stmt;

    protected function pwdMatch($password, $password2){
        if($password !== $password2){
            return 'As senhas são diferentes';
        }
      
    }
    protected function invalidEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return 'Email inválido';
        }
    }

    protected function existingEmail($email)
    {
      $sql = "SELECT * FROM usuarios WHERE email = ?;";
      
      $this->stmt = $this->conexaoDB()->prepare($sql);
      $this->stmt->execute(array($email));
      $this->stmt = null;
      return 'Este email já está sendo utilizado';     
      
    }
    protected function createUser($name, $email, $password){
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?);";
        $this->stmt = $this->conexaoDB()->prepare($sql);       
       
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        $this->stmt->execute(array($name,$email,$hashedPwd));        
        $this->stmt = null;       
        exit();
    }
}