<?php
require_once '../database/database.php';

if(isset($_POST['validate'])){
    
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
    
    
    
    if(isset($userName) && isset($userPseudo) && isset($userEmail) ){
        
       $updateStm=$db->prepare("UPDATE users SET name=?, pseudo=?, email=?, picture=? WHERE id=?;");
       
       if(isset($_FILES['picture']['name']) && !empty($_FILES['picture']['name'])){
           
           $getId=$_SESSION['id'];
           $extension=substr($_FILES['picture']['name'],strpos($_FILES['picture']['name'],'.')+1);
           
           $distination= "/forum_mysql/database/users_actions/pic/$getId.$extension";
           
           if(move_uploaded_file($_FILES['picture']['tmp_name'],__DIR__."/pic/$getId.$extension")){
               $updateStm->execute(array($userName,$userPseudo,$userEmail,$distination,$_SESSION['id']));
               header('Location:../index.php');
               exit();
           }
       }
       $pic=$_SESSION['picture'];
       $updateStm->execute(array($userName,$userPseudo,$userEmail,$pic,$_SESSION['id']));
       header('Location:../index.php');
       exit();

    }
}