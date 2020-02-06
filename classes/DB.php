<?php

class DB{
    private $HostName="localhost";
    private $UserName="webserver";
    private $Password="";
    private $DataBaseName="ebook";
    private $connection;
    public function connect(){
        $this->connection=mysqli_connect($this->HostName,$this->UserName,$this->Password,$this->DataBaseName);
        return $this->connection;
    }
}