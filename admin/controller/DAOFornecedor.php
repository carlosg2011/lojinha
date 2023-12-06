<?php
require_once 'FabricaConexao.php';
require_once '../model/Fornecedoresclasses.php';
class DAOFornecedor{
public function insert(Fornecedor $c){
$sql ='INSERT INTO Fornecedor(nome,cnpj,insc_estadual,endereco,contato)values(?,?,?,?,?)';
$stmt = FabricaConexao::Conexao()->prepare($sql);
$stmt->bindValue(1,$c->getNome());
$stmt->bindValue(2,$c->getcnpj());
$stmt->bindValue(3,$c->getinsc_estadual());
$stmt->bindValue(4,$c->getendereco());
$stmt->bindValue(5,$c->getcontato());
$stmt->execute();
header("Locatio:../view/Principal1.php");
}
}
?>