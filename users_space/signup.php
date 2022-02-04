<?php

include '../includes/head.php';
loadHead("Sign up");

?>

<body>
    <head>
        <?php include '../includes/navbar.php';?>
    </head>
    <form>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" class="form-control" name="pseudo">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label for="pic">Profile picture</label>
            <input type="file" class="form-control" name="picture">
        </div>
        <button type="submit" class="btn btn-primary" name="validate">Submit</button>
        </form>
</body>