<?php
#puxando dados do DB

public function puxaDB()
{
    $this->recVariaveis();
    $B=$this->selecionaClientes($this->Nome, $this->Sexo, $this->Cidade);

    foreach($B as $C) {
        if($C['Id']==$Id){
            $Nome=$C['Nome'];
            $Sexo=$C['Sexo'];
            $Cidade=$C['Cidade'];
        }
    }
}


#Atualizar dados dos clientes

public function atualizar()
{
    $this->recVariaveis();
    $this->atualizarClientes($this->Id, $this->Nome, $this->Sexo, $this->Cidade);

    echo "Usuário Atualizado com Sucesso!";
}