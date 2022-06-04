<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassCadastro extends ClassConexao{

  private $db;

  #Cadastrará os clientes no sistema
  protected function cadastroClientes()
  {
    $Id=0;
    $this->Db=$this->conexaoDB()->prepare("insert into teste values(:id, :nome, :sexo, :cidade)");
    $this->db->bindParam(":id",$Id,\PDO::PARAM_INT);
    $this->db->bindParam(":nome",$Nome,\PDO::PARAM_STR);
    $this->db->bindParam(":sexo",$Sexo,\PDO::PARAM_STR);
    $this->db->bindParam(":cidade",$Cidade,\PDO::PARAM_STR);
    $this->db->execute();
    
  }

  #Acesso ao banco de dados com seleção
  protected function selecionaClientes()
  {
    $Nome='%'.$Nome.'%';    
    $Sexo='%'.$Sexo.'%';    
    $Cidade='%'.$Cidade.'%';
    $BFetch=$this->Db=$this->conexaoDB()->prepare("select * from teste where Nome like :nome and Sexo like :sexo and Cidade like :cidade");
    $BFetch->bindParam(":nome",$Nome,\PDO::PARAM_STR);
    $BFetch->bindParam(":sexo",$Sexo,\PDO::PARAM_STR);
    $BFetch->bindParam(":cidade",$Cidade,\PDO::PARAM_STR);
    $BFetch->execute();
    
    $I=0;
    while($Fetch=$BFetch->fetch(\PDO::FETCH_ASSOC)){
        $Array[$I]=['Nome'=>$Fetch['Nome'],'Sexo'=>$Fetch['Sexo'],'Cidade'=>$Fetch['Cidade']];
        $I++;
    }
    return $Array;
  }
 

// Função para cadastro;
  protected function cadastroGestao(
      $userId, 
      $cliente, 
      $equipe, 
      $date, 
      $infra_estrutura, 
      $infra_estrutura_num, 
      $cabeamento, 
      $cabeamento_num, 
      $conectorizacao, 
      $conectorizacao_num, 
      $tempo_conclusao, 
      $projeto, 
      $obs
    )
  {
    $this->db=$this->conexaoDB()->prepare("INSERT INTO cadastro values(
      :Usuarios_idUsuarios, 
      :infraEstrutura_idinfraEstrutura, 
      :quantidade_InfraEstrutura, 
      :Projeto_idProjeto, 
      :Conector_idConector,
      :quantidade_Conector,
      :Cabeamento_idCabeamento,
      :quantidade_Cabeamento,
      :Clientes_idClientes,
      :equipe,
      :data_cadastro,
      :tempo_conclusao,
      :observacoes
      )");
      
    $this->db->bindParam(':Usuarios_idUsuarios', $userId, \PDO::PARAM_INT);
    $this->db->bindParam(':infraEstrutura_idinfraEstrutura', $infra_estrutura, \PDO::PARAM_INT);
    $this->db->bindParam(':quantidade_InfraEstrutura', $infra_estrutura_num, \PDO::PARAM_INT);
    $this->db->bindParam(':Projeto_idProjeto', $projeto, \PDO::PARAM_INT);
    $this->db->bindParam(':Conector_idConector', $conectorizacao, \PDO::PARAM_INT);
    $this->db->bindParam(':quantidade_Conector', $conectorizacao_num, \PDO::PARAM_INT);
    $this->db->bindParam(':Cabeamento_idCabeamento', $cabeamento, \PDO::PARAM_INT);
    $this->db->bindParam(':quantidade_Cabeamento', $cabeamento_num, \PDO::PARAM_INT);
    $this->db->bindParam(':Clientes_idClientes', $cliente, \PDO::PARAM_INT);
    $this->db->bindParam(':equipe', $equipe, \PDO::PARAM_STR);
    $this->db->bindParam(':data_cadastro', $date, \PDO::PARAM_STR);
    $this->db->bindParam(':tempo_conclusao', $tempo_conclusao, \PDO::PARAM_STR);
    $this->db->bindParam(':observacoes', $obs, \PDO::PARAM_STR);
  }
}