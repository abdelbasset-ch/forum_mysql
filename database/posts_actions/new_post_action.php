<?php
require_once '../database/database.php';
if(isset($_POST['validate'])){
    if(isset($_POST['title']) && !empty($_POST['title'])){
        $title=htmlspecialchars($_POST['title']);
    }
    if(isset($_POST['content']) && !empty($_POST['content'])){
        $content=nl2br(htmlspecialchars($_POST['content']));
    }
        
    $date=date("Y-m-d h:i:sa");
    $author_id=$_SESSION['id'];
    $author_pseudo=$_SESSION['pseudo'];
    if(isset($title) && isset($content)){
    $insertQuery=$db->prepare("INSERT INTO posts (title, date, author_id, content,author_name) VALUES(?,?,?,?,?);");
    $insertQuery->execute(array($title,$date,$author_id,$content,$author_pseudo));
    header("Location:/forum_mysql/index.php");
    exit();
    }
    
}