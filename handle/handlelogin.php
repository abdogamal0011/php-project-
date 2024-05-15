<?php

require_once '../inc/connection.php';
if (isset($_POST['submit'])) {

    header("location:../ownerlogin.php");
}
$uname = trim(htmlspecialchars($_POST['uname']));
$password = trim(htmlspecialchars($_POST['password']));

// validation

$errors = [];
if (empty($uname)) {
    $errors[] = "user name  is required ";
}
//password(required  , min >=50)
if (empty($password)) {
    $errors[] = "password is required ";
} elseif (strlen($password) < 6) {
    $errors[] = "password must be more than 6 char  ";
}

//check

if(empty($errors)){
$query = "select fid ,  uname , pass  from tblowner where uname='$uname'";
$runQuery = mysqli_query($conn, $query);
if (mysqli_num_rows($runQuery) == 1) {
    $user = mysqli_fetch_assoc($runQuery);
    $oldPassword = $user['pass'];
    // $isverify =  password_verify($password, $oldPassword);
    if ($password = $oldPassword) {
        $_SESSION['user_id'] = $user['fid'];
        header("location:../index.php");    
    } else {
        $_SESSION['errors'] = ["creidentials not correct "];
     $_SESSION['uname'] = $uname;
        header("location:../ownerlogin.php");
    }
} else {
    $_SESSION['errors'] = ["this account not exist "];
    $_SESSION['uname'] = $uname;
    header("location:../ownerlogin.php");
}
}else{
    $_SESSION['errors'] = $errors;
    $_SESSION['uname'] = $uname;
    header("location:../ownerlogin.php");
}