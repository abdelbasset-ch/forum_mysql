<?php
session_start();
require_once '../database/users_actions/login_action.php';
include '../includes/head.php';
loadHead("Log in");

?>

<body class="container">
    <head>
        <?php include '../includes/navbar.php';?>
    </head>
    <form method="POST">
        
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password">
        </div><br>
        
        <button type="submit" class="btn btn-primary" name="validate">Submit</button>
        </form>
</body>