<?php
class Pagamento{
private $_forma;
private $_Prazo;


    public function setFormapagamento($forma){
    $this->_forma = $forma;
    } 


    public function getFormapagamento()
    {$this->_forma ;}
    


public function setPrazo($Prazo){
    $this->_Prazo = $Prazo;  
    }

        
                public function getPrazo()
                {
                
                    $this->_Prazo;
                
                }
               
            }
?>