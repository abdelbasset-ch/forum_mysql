<?php
try{
    $db=new PDO("mysql:host=localhost; dbname=users","root");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(Exception $ex){
    echo $ex->getMessae();
}
