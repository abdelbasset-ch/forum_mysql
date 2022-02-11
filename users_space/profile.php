<?php
session_start();
require_once '../includes/head.php';
loadHead("Profile");
?>
<body class="container">
    <head>
    <?php include '../includes/navbar.php';?>   
    </head>
    <main>
        <div>
            <?php if(isset($_SESSION['picture']) && !empty($_SESSION['picture'])):?>
            <img src="<?= $_SESSION['picture'];?>" alt="Profile picture" style="width:100px;">
            <?php endif?>
        </div>
        <table class="table">
            <tbody>
                <tr>
                    <td>Name</td>
                    <td><?= $_SESSION['name'] ?></td>
                </tr>
                <tr>
                    <td>Pseudo</td>
                    <td><?= $_SESSION['pseudo'] ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?= $_SESSION['email'] ?></td>
                </tr>
            </tbody>
        </table>
        <a href="profile_update.php"><button type="button" class="btn btn-primary">Update</button></a>
    </main>
    
</body>