<?php 
session_start();
if(isset($_SESSION['user_id'])){
    unset($_SESSION['user_id']);
    header("location:./../ownerlogin.php");
}else{
    header("location:./../index.php");
}


