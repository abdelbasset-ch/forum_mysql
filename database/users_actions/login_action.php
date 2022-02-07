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
            header('Location:../index.php');
            exit();
        }
    }
    
}