<?php
require_once '../database/database.php';
if(isset($_POST['validate'])){
    
    $commentContent=nl2br(htmlspecialchars($_POST['comment']));
    $authorId=$_SESSION['id'];
    $postId=$_GET['id'];
    $authorName=$_SESSION['pseudo'];
    $date=date("Y-m-d h:i:sa");
    $insertComment=$db->prepare("INSERT INTO comments (content,author_id,post_id,author_name,date) VALUES(?,?,?,?,?);");
    $insertComment->execute(array($commentContent,$authorId,$postId,$authorName,$date));
    header("Location:read_post.php?id=$postId");
    exit();
}