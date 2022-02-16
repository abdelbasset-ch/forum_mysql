<?php
session_start();
require_once '../database/posts_actions/new_post_action.php';
include '../includes/head.php';

loadHead("New Post");
?>
<body class="container">
    <head>
        <?php include '../includes/navbar.php';?>
    </head>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title">
        <div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" cols="30" rows="10"></textarea>
        <div><br>
        <input type="submit" class="btn btn-primary" name="validate" value="Post">
    </form>

</body>