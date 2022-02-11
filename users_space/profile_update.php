<?php
session_start();
require_once '../database/users_actions/update_profile_action.php';
include '../includes/head.php';
loadHead("Sign up");
?>

<body class="container">
    <head>
        <?php include '../includes/navbar.php';?>
    </head>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="<?= $_SESSION['name'];?>">
        </div>
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" class="form-control" name="pseudo" value="<?= $_SESSION['pseudo'];?>">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" value="<?= $_SESSION['email'];?>">
        </div>
        
        <div class="form-group">
            <label for="pic">Profile picture</label>
            <input type="file" class="form-control" name="picture">
        </div><br>
        <button type="submit" class="btn btn-primary" name="validate">Submit</button>
        </form>
</body>