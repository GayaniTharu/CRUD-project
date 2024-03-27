<?php
class Database{

    // connection parameters
    private $host="localhost";
    private $user ="root";
    private $password="";
    private $database = "crudproject";
    
    public $conn;

        // constructor method
        public function __construct(){
       $this->conn = new mysqli($this->host,$this->user,$this->password,$this->database);

       // Test the connection     
       if($this->conn->connect_error){
        die("Connection failed");

       }
    }

        // Return the connection object
    public function getConnection(){
        return $this->conn;
    }

}