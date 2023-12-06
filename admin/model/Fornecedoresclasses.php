
<?php
class Fornecedor{
private $_nome;
private $_cnpj;
private $_insc_estadual;
private $_endereco;
private $_contato;
    public function setNome($nome){
    $this->_nome = $nome;
    } 


    public function getNome(){$this->_nome ;}



public function setcnpj($cnpj){
    $this->_cnpj = $cnpj;
    
    }
    public function setEndereco($endereco){
        $this->_endereco = $endereco;
        
        }
        public function setinsc_estadual($insc_estadual){
            $this->_insc_estadual = $insc_estadual;
            
            }
        
                public function getinsc_estadual()
                {
                
                    $this->_insc_estadual;
                
                }
                public function getcnpj()
                {
                
                    $this->_cnpj;
                
                }
                public function getendereco()
                {
                
                    $this->_endereco;
                
                }
                public function setcontato($contato){
                    $this->_contato = $contato;
                    
                    }
                
                        public function getcontato()
                        {
                        
                            $this->_contato;
                        
                        }
                }
                
?>