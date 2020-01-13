<?php
session_start();
require "../View/home.php";
require "../Model/UserDatabase.php";
if (isset($_POST["login"])){                                      
    $username = $_POST['username'];                                      
    $password = $_POST['password'];   
    $user =  login($username,$password );
    echo $user->fullname;
    echo json_encode($user);
      if($user==null){
      	$_SESSION["isLogin"]= fasle;
      }else{
      	$_SESSION["isLogin"]= true;
      	$_SESSION["fullname"]= $user->fullname;
      }
		header("Location:../View/home.php");

    }
?>