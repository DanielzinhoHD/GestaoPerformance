<?php

namespace App\Model;
use App\Model\ClassConexao;


class ClassFormulario extends ClassConexao{

  private $stmt;

  protected function selecionaClientes($userId)
  {
    $sql = 'SELECT * FROM `clientes` WHERE Usuarios_idUsuarios = ' . $userId;

    $this->stmt = $this->conexaoDB()->prepare($sql);
    $this->stmt->execute();
    $clients = $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
    $stmt = null;
    
    return $clients;
  }

  protected function selecionaInfraEstrutura()
  {
    $sql = 'SELECT * FROM `infraestrutura`;';

    $this->stmt = $this->conexaoDB()->prepare($sql);
    $this->stmt->execute();
    $infraEstrutura = $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
    $stmt = null;
    
    return $infraEstrutura;
  }

  protected function selecionaCabeamento()
  {
    $sql = 'SELECT * FROM `cabeamento`;';

    $this->stmt = $this->conexaoDB()->prepare($sql);
    $this->stmt->execute();
    $cabeamento = $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
    $stmt = null;

    return $cabeamento;
  }

  protected function selecionaConector()
  {
    $sql = 'SELECT * FROM `conector`;';

    $this->stmt = $this->conexaoDB()->prepare($sql);
    $this->stmt->execute();
    $conector = $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
    $stmt = null;

    return $conector;
  }

  protected function selecionaProjeto($userId, $clientId)
  {
    $sql = 'SELECT proposta, idProjeto FROM `projeto` WHERE Usuarios_idUsuarios = ? AND Clientes_idClientes = ?';

    $this->stmt = $this->conexaoDB()->prepare($sql);
    $this->stmt->execute(array($userId, $clientId));
    $projetos = $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
    $stmt = null;

    return json_encode($projetos);
  }
}