<?php


class DBConnection{
    private $host      = "";
    private $user      = "";
    private $pass      = "";
    private $schema    = "";
    private $connection= "";
    
    public function __construct(){
        
        include 'database.php';
        
        $this->setHost($host);
        $this->setUser($user);
        $this->setSchema($schema);
        $this->setPass($pass);
        $this->connection = new mysqli( $this->getHost(), $this->getUser(), $this->getPass(), $this->getSchema());
        if ( $this->connection->connect_errno ){
            echo $this->connection->connect_error;
            echo "Não conectado!<br>";
        }else{
            // echo "conectado!<br>";
        }
        
        
    }
    
    public function query($cmdSql) { // SELECT
        $rs = $this->connection->query($cmdSql);
        return ( $rs);
    }
    
    public function execute($cmdSQL) { // INSERT, UPDATE, DELETE
        return ( $this->connection->query($cmdSQL));
    }
    
    public function setHost($host){
        $this->host = $host;
        return $this;
    }
    public function getHost(){
        return $this->host;
    }
    
    public function getUser(){
        return $this->user;
    }
    
    public function setUser($user){
        $this->user = $user;
        return $this;
    }
    
    public function getPass(){
        return $this->pass;
    }
    
    public function setPass($pass){
        $this->pass = $pass;
        return $this;
    }
    
    public function getSchema(){
        return $this->schema;
    }
    
    public function setSchema($schema){
        $this->schema = $schema;
        return $this;
    }
    
}


?>