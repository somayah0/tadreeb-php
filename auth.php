<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }elseif(!isset($_SESSION["usernamep"])){
    header("Location: login.php");
    exit();}
?>