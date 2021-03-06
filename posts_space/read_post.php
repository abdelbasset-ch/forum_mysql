<?php
session_start();
require_once '../database/posts_actions/read_post_action.php';
require_once '../database/posts_actions/new_comment_action.php';
require_once '../database/posts_actions/get_comments_action.php';
include '../includes/head.php';
loadHead($postTitle);
?>
<body class="container">
    <?php include '../includes/navbar.php';?><br>
    <div class="card" style="padding-right:5px;padding-left:5px">
        <div class="card-head">
            <div style="display:Inline-block;"><p><?= $postAuthorName?></p></div>
            <div style="display:Inline-block; float: right;"><p><?= $postDate?></p></div>
            <h2 style="line-height:20%"><?= $postTitle?></h2>
        </div><hr>
        <div class="card-body">
            <p><?= $postContent?></p>
        </div>
    </div>
    <hr>
    <?php if(isset($_SESSION["auth"])):?>
    <form  method="post">
        <div class="form-group">
        <textarea name="comment" class="form-control" cols="30" rows="5"></textarea><br>
        <input type="submit" class="btn btn-primary" name="validate" value="comment">
    </form>
    <?php endif?>
       <br><br>
    <?php while($comment=$getCommentsStm->fetch()):?>
        <div class="card">
            <div class="card-head">
                <h4 style="display:Inline-block;"><?=$comment["author_name"]; ?></h4>
                <p style="display:Inline-block; float: right;"><?=$comment["date"]; ?></p>
            </div>
            <hr>
            <div class="card-body">
            <p><?=$comment["content"]; ?></p>
            </div>
        </div><br>
    <?php endwhile?>
</body>