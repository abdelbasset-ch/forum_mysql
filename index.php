<?php
session_start();
require_once 'database/posts_actions/get_posts_action.php';
include 'includes/head.php';
loadHead("forum");
?>
<body class="container">
    <head>
    <?php include 'includes/navbar.php';?>
    </head>
    <main><br>
        <?php while($post=$postsQuery->fetch()):?>
            <div class="card" style="padding-right:5px;padding-left:5px">
                <div class="card-head">
                    <div style="display:Inline-block;"><p><?= $post['author_name']?></p></div>
                    <div style="display:Inline-block; float: right;"><p><?= $post['date']?></p></div>
                    <a href="posts_space/read_post.php?id=<?= $post['id']?>" style="text-decoration:none; color:black"><h2 style="line-height:20%"><?= $post['title']?></h2></a>
                </div><hr>
                <div class="card-body">
                    <p><?= strlen($post['content'])>300?substr($post['content'],0,300).'...'.'<a href="posts_space/read_post.php">read more</a>':$post['content']?></p>
                </div>
            </div><br>
            <?php endwhile?>
        </main>
        <script>
            let sr=document.getElementById("search");
            sr.addEventListener('enter', (event) => {
                //document.write("ffff");
                sr.submit();
            });
        </script>
</body>
