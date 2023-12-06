<?php
class Produtos{
private $_descricao;
private $_PrecoCompra;
private $_PrecoVenda;
private $_qtdeEstoque;

    public function setDescricao($descricao){
    $this->_descricao = $descricao;
    } 


    public function getDescricao(){$this->_descricao ;}



public function setPrecoCompra($Compra){
    $this->_PrecoCompra = $Compra;
    
    }
    public function setPrecoVenda($Venda){
        $this->_PrecoVenda = $Venda;
        
        }
        public function setEstoque($qtde){
            $this->_qtdeEstoque = $qtde;
            
            }
        
                public function getPrecoCompra()
                {
                
                    $this->_PrecoCompra;
                
                }
                public function getPrecoVenda()
                {
                
                    $this->_PrecoVenda;
                
                }
                public function getEstoque()
                {
                
                    $this->_qtdeEstoque;
                
                }
                }
?>