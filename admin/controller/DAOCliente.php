<?php
require_once 'FabricaConexao.php';
require_once '../model/clienteclasse.php';

class DAOCliente{
    public function Insert(Cliente $c){

        $sql ='INSERT INTO clientes(nome,cpf,telefone,email,endereco)values(?,?,?,?,?)';
        $stmt = FabricaConexao::Conexao()->prepare($sql);
    
        $stmt->bindValue(1,$c->getNome());
        $stmt->bindValue(2,$c->getCpf());
        $stmt->bindValue(3,$c->getTelefone());
        $stmt->bindValue(4,$c->getEmail());
        $stmt->bindValue(5,$c->getEndereco());
        $stmt->execute();
      header("Location:../view/Principal.php");
    }
    public function Update(Cliente $c){
    
        $sql ='UPDATE clientes SET nome = ?,cpf = ?,Telefone = ?,email = ?,endereco = ? WHERE id_cliente = ?';
        $stmt = FabricaConexao::Conexao()->prepare($sql);
        
        $stmt->bindValue(1,$c->getNome());
        $stmt->bindValue(2,$c->getCpf());
        $stmt->bindValue(3,$c->getTelefone());
        $stmt->bindValue(4,$c->getEmail());
        $stmt->bindValue(5,$c->getEndereco());
        $stmt->bindValue(6,$c->getId());
        $stmt->execute();
        header("Location:../view/ListaClientes.php");
    }
    
    public function find($id){
    
      $sql ='SELECT * FROM clientes WHERE id_cliente = :id';
      $stmt = FabricaConexao::Conexao()->prepare($sql);
      $stmt->bindParam(':id',$id,PDO::PARAM_INT);
      $stmt->execute();
      return $stmt->fetch();
    }
    
    
    
    
    public function Delete($id){
    
      $sql ='DELETE FROM clientes WHERE id_cliente = :id';
      $stmt = FabricaConexao::Conexao()->prepare($sql);
      $stmt->bindParam(':id',$id,PDO::PARAM_INT);
      $stmt->execute();
      header("Location:../view/ListaClientes.php");
    }
    }
?>
