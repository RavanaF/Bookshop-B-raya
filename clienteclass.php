<?php

class Cliente {
    private $produto;
    //private $cliente;
    
    public function __construct($produto){
        $this->setProduto($produto);
        //$this->setNome($cliente);
        
    }
    
    
    public function toString(){
        return (
            $this->getProduto());
            //$this->getCliente() .", ");
    }
    
    /*public function getCliente()
    {
        return $this->cliente;
    }*/
    
    public function getProduto()
    {
        return $this->produto;
    }
    
    public function setProduto($produto)
    {
        $this->produto = $produto;
        return $this;
    }
    
    /*public function setCliente ($cliente){
        $this->cliente = $cliente;
        return $this;
    }*/
}

?>