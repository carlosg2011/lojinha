<?php
require_once 'FabricaConexao.php';
require_once '../model/Pedidoclasse.php';
class DAOPedido{
public function insert(Pedido $c){
$sql ='INSERT INTO Fornecedor(nome,produto,qntEstoque,dataPedido,total)values(?,?,?,?,?)';
$stmt = FabricaConexao::Conexao()->prepare($sql);
$stmt->bindValue(1,$c->getNome());
$stmt->bindValue(2,$c->getproduto());
$stmt->bindValue(3,$c->getquantidadeEstoque());
$stmt->bindValue(4,$c->getdataPedido());
$stmt->bindValue(5,$c->gettotal());
$stmt->execute();
header("Locatio:../view/Principal1.php");
}
}
?>