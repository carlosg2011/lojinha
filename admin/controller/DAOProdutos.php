<?php
require_once 'FabricaConexao.php';
require_once '../model/ProdutosClasse.php';
class DAOProdutos{
public function insert(Produtos $c){
$sql ='INSERT INTO Fornecedor(descricao,PrecoCompra,Precovenda,qtdEstoque)values(?,?,?,?,?)';
$stmt = FabricaConexao::Conexao()->prepare($sql);
$stmt->bindValue(1,$c->getDescricao());
$stmt->bindValue(2,$c->getPrecoCompra());
$stmt->bindValue(3,$c->getPrecoVenda());
$stmt->bindValue(4,$c->getEstoque());
$stmt->execute();
header("Locatio:../view/Principal1.php");
}
}
?>