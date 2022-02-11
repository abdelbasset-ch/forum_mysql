<?php
require_once '../database/database.php';

if(isset($_POST['validate'])){
    echo'step 1';
    if(preg_match('/^[a-zA-Z]{3,}$/',$_POST['name'])){
        $userName=$_POST['name'];
    }else{
        $nameErr="Invalid Name";
    }
    if(preg_match('/^[a-zA-Z_0-9]{3,}$/',$_POST['pseudo'])){
        $userPseudo=$_POST['pseudo'];
    }else{
        $pseudoErr="Invalid Pseudo";
    }
    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $userEmail=$_POST['email'];
    }else{
        $emailErr="Invalid Email";
    }
    if(preg_match('/^[a-zA-Z_0-9]{3,}$/',$_POST['password'])){
        $userPass=password_hash($_POST['password'],PASSWORD_DEFAULT);
    }else{
        $passErr="Invalid Password";
    }
    $pic="";
    
    if(isset($userName) && isset($userPseudo) && isset($userEmail) && isset($userPass)){
        
        $checkQuery=$db->prepare("SELECT * FROM users WHERE email=?");
        $checkQuery->execute(array($userEmail));
        if($checkQuery->rowCount()==0){
            $insertStm=$db->prepare("INSERT INTO users(name, pseudo, email, password, picture) VALUES (?,?,?,?,?);");
            $insertStm->execute(array($userName,$userPseudo,$userEmail,$userPass,$pic));
            if(isset($_FILES['picture']['name']) && !empty($_FILES['picture']['name'])){
                $getQuery=$db->prepare("SELECT id FROM users WHERE email=?");
                $getQuery->execute(array($userEmail));
                $getrow=$getQuery->fetch();
                $getId=$getrow['id'];
                $extension=substr($_FILES['picture']['name'],strpos($_FILES['picture']['name'],'.')+1);
                
                $distination= "/forum_mysql/database/users_actions/pic/$getId.$extension";
                
                $updatestm=$db->prepare("UPDATE users SET picture=? WHERE id=?");
                
                if(move_uploaded_file($_FILES['picture']['tmp_name'],__DIR__."/pic/$getId.$extension")){
                    $updatestm->execute(array($distination,$getId));
                }
            }
            header('Location:../index.php');
            exit();
        }
    }
}