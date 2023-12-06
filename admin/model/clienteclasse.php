<?php
class Cliente
{
    private $_nome;
    private $_cpf;
    private $_email;
    private $_endereco;
    private $_telefone;
    private $_ID;

    

    public function setcpf($cpf)
    {
        $this->_cpf = $cpf;
    }
    public function setendereco($endereco)
    {
        $this->_endereco = $endereco;
    }
    public function setemail($email)
    {
        $this->_email = $email;
    }
    public function SetTelefone($telefone)
    {
        $this->_telefone = $telefone;
    }
    public function setNome($nome)
    {
        $this->_nome = $nome;
    }
    public function setId($ID)
    {
        $this->_ID = $ID;
    }
    
    public function getNome()
    {
        return $this->_nome;
    }
    
    public function getemail()
    {
        return $this->_email;
    }

    public function getcpf()
    {
        return $this->_cpf;
    }

    public function getendereco()
    {
        return $this->_endereco;
    }

    public function getTelefone()
    {
        return $this->_telefone;
    }
    public function getId()
    {
        return $this->_ID;
    }
}
