<?php
require_once 'FabricaConexao.php';
require_once '../model/Pagamento.php';
class DAOPagamento{
public function insert(Pagamento $c){
$sql ='INSERT INTO Pagamento(forma,prazo)values(?,?,?,?,?)';
$stmt = FabricaConexao::Conexao()->prepare($sql);
$stmt->bindValue(1,$c->getFormapagamento());
$stmt->bindValue(2,$c->getPrazo());
$stmt->execute();
header("Locatio:../view/Principal1.php");
}
}
?>