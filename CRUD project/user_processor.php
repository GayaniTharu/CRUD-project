<?php
//echo "The Processing Page";

// Create the user class object
require_once("user.php");

$user = new User();

if( isset($_POST['email']) && isset($_POST['id'])){
    $id=$_POST['id'];
    $name=$_POST["name"];
    $address=$_POST["address"];
    $email=$_POST["email"];
    $user->update_user($id,$name,$address,$email);
    header("location: view_users.php");


}elseif(isset($_POST['name']) && isset($_POST['address']) && isset($_POST['email'])){
    $name=$_POST["name"];
    $address=$_POST["address"];
    $email=$_POST["email"];
    $username=$_POST['username'];
    $password=$_POST['password'];

// call add user function of the user object
    $user->add_user($name,$address,$email,$username,$password);
    header("location: view_users.php");
    // exit();



}elseif(isset ($_GET['id'])){
    $id=$_GET['id'];
    $user->delete_user($id);
  
    header("location: view_users.php");


}elseif(isset($_POST['username'])){
    $username=$_POST['username'];
    $password=$_POST['password'];


   $result= $user->authenticate_user($username);

   // user enterd pw== user table's password
   if($password== $result['password']){
    //Allow user to log the system.or else re direct the login page.
    header(("Location: dashboard.php"));
   }else{
    header(("Location: user_login.html"));
   }



//    if($result){
//     //Re direct user to the home page. else redirect user to the login form again
//    }else{

//    }

}

