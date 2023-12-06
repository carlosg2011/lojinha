
<?php
class Pedido{
private $_nome;
private $_produto;
private $_quantidadeEstoque;
private $_dataPedido;
private $_total;
    public function setNome($nome){
    $this->_nome = $nome;
    } 


    public function getNome(){$this->_nome ;}



public function setproduto($produto){
    $this->_produto = $produto;
    
    }
    public function setquantidadeEstoque($quantidadeEstoque){
        $this->_quantidadeEstoque = $quantidadeEstoque;
        
        }
        public function setdataPedido($dataPedido){
            $this->_dataPedido = $dataPedido;
            
            }
        
                public function getdataPedido()
                {
                
                    $this->_dataPedido;
                
                }
                public function getproduto()
                {
                
                    $this->_produto;
                
                }
                public function getquantidadeEstoque()
                {
                
                    $this->_quantidadeEstoque;
                
                }
                public function settotal($total){
                    $this->_total = $total;
                    
                    }
                
                        public function gettotal()
                        {
                        
                            $this->_total;
                        
                        }
                }
                
?>