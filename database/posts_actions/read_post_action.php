<?php
require_once '../database/database.php';
$postId=$_GET['id'];
$getPostQuery=$db->prepare("SELECT * FROM posts WHERE id=?");
$getPostQuery->execute(array($postId));
if($post=$getPostQuery->fetch()){
    $postTitle=$post['title'];
    $postDate=$post['date'];
    $postContent=$post['content'];
    $postAuthorName=$post['author_name'];
}