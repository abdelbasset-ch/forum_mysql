<?php
require_once '../database/database.php';
if(isset($_POST['validate'])){
    $userEmail=$_POST['email'];
    $userpass=$_POST['password'];
    $checkQuery=$db->prepare("SELECT * FROM users WHERE email=?");
    $checkQuery->execute(array($userEmail));
    if($checkQuery->rowCount()>0){
        $getUser=$checkQuery->fetch();
        if(password_verify($userpass,$getUser['password'])){
            $_SESSION['auth']=true;
            $_SESSION['id']=$getUser['id'];
            $_SESSION['name']=$getUser['name'];
            $_SESSION['pseudo']=$getUser['pseudo'];
            $_SESSION['email']=$getUser['email'];
            $_SESSION['picture']=$getUser['picture'];
            header('Location:../index.php');
            exit();
        }
    }
    
}