<?php
require_once '../database/database.php';
$postId=$_GET["id"];
$getCommentsStm=$db->prepare("SELECT * FROM comments WHERE post_id=? ORDER BY id DESC");
$getCommentsStm->execute(array($postId));

