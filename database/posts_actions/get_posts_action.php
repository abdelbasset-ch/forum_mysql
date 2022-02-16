<?php
require_once 'database/database.php';
$postsQuery=$db->query("SELECT * FROM posts ORDER BY id DESC");