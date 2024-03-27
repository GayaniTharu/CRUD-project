<?php

require_once("DB.php");

class User{
    
    protected $db;

    public function __construct()
    {
        // Create an object of database class
        $this->db = new Database();
    }

    //Function to Add anew user
    public function add_user($name, $address,$email,$username, $password){
        $conn = $this->db->getConnection();
        $sql = "INSERT INTO users (name, address, email,username, password) values ('$name','$address','$email','$username','$password')";
        $conn->query($sql);

    }

    // Function to view all users
    public function view_all_users(){
        $conn = $this->db->getConnection();
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        return $result;
    }

    // function to edita user details
   
    public function get_user($id){
        $conn=$this->db->getConnection();
        $sql="SELECT * FROM users WHERE id = $id";
        $result = $conn->query($sql);
        return $result->fetch_assoc();
    }
    //Update new details
    public function update_user($id,$name,$address,$email){
        $conn=$this->db->getConnection();
        $sql= "UPDATE users SET name ='$name',address ='$address', email='$email' WHERE id=$id";
        return $conn->query($sql);

    }

    // Delete function

    public function delete_user($id){
        $conn=$this->db->getConnection();
        $sql= "DELETE FROM  users WHERE id=$id";
        return $conn->query($sql);

    }

    // Function to Athonticate user

    public function authenticate_user($username){
        //if user is valid, return true. else false
        $conn=$this->db->getConnection();
        $sql ="SELECT * FROM users WHERE username = $username";
        $result= $conn->query($sql);
        return $result->fetch_assoc();
        
    }

}