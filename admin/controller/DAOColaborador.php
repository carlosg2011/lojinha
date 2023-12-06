<?php
require_once 'FabricaConexao.php';
require_once '../model/Colaborador.php';
class DAOColaborador{
    public function insert(Colaborador $c){
        $sql ='INSERT INTO clientes(nome,email,cpf,telefone,dependenteN)values(?,?,?,?,?)';
        $stmt = FabricaConexao::Conexao()->prepare($sql);
        $stmt->bindValue(1,$c->getNome());
        $stmt->bindValue(2,$c->getEmail());
        $stmt->bindValue(3,$c->getCPF());
        $stmt->bindValue(4,$c->getTelefone());
        $stmt->bindValue(5,$c->getDependentes());
        $stmt->execute();
        header("Locatio:../view/Principal1.php");
    }
}
?>