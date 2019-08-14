<?php


namespace Model;
use PDO;

class DBConnection
{
public $servername = "localhost";
public $username = "username";
public $password = "password";
public function __construct($servername, $username, $password)
{
    $this->servername = $servername;
    $this->username = $username;
    $this->password = $password;
}
public function connect(){
    return new PDO($this->servername, $this->username, $this->password);
}
}