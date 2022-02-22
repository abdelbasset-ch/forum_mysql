<?php
require_once 'database/database.php';

if(isset($_POST["search"]) && !empty($_POST["search"])){
    $search=$_POST["search"];
    $postsQuery=$db->query("SELECT * FROM posts WHERE title LIKE '%$search%' ORDER BY id DESC;");
    //$postsQuery->execute(array($search));
}else{
    $postsQuery=$db->query("SELECT * FROM posts ORDER BY id DESC");
}