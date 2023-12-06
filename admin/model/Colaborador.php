<?php
class Colaborador{
private $_nome;
private $_Email;
private $_CPF;
private $_Telefone;
private $_DependentesNumero;

    public function setNome($nome){
    $this->_nome = $nome;
    } 


    public function getNome(){$this->_nome ;}



public function setEmail($Email){
    $this->_Email = $Email;  
    }
public function setCPF($CPF){
        $this->_CPF = $CPF;  
        }

    public function setTelefone($telefone){
        $this->_Telefone= $telefone;
        
        }
        public function setDependentes($dependentes){
            $this->_DependentesNumero = $dependentes;
            
            }
        
                public function getEmail()
                {
                
                    $this->_Email;
                
                }
                public function getCPF()
                {
                
                    $this->_CPF;
                
                }
                public function getTelefone()
                {
                
                    $this->_Telefone;
                
                }
                public function getDependentes()
                {
                
                    $this->_DependentesNumero;
                
                }
            }
?>