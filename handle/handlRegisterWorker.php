<?php 
require_once '../inc/connection.php';

if(! isset($_POST['submit'])){

    header("location:../index.php");
}
$name = trim(htmlspecialchars($_POST['name']));
$phone = trim(htmlspecialchars($_POST['phone']));
$role = trim(htmlspecialchars($_POST['role']));


//validation
$errors = [];
// name(required , string , max=50)
    if(empty($name)){
        $errors[] = "name is required ";
    }elseif (is_numeric($name)){
        $errors[] = "name must be string ";

    }elseif(strlen($name) > 50){
        $errors[] = "name must be less than 50 char ";
    }

//phone(inter  , 15)
if(empty($phone)){
    $errors[] = "phone is required ";
}elseif (! is_string($phone)){
    $errors[] = "phone not correct  ";

}
if(empty($errors)){
    $query = "insert into tblworker(`fname`  , `phone` , `role`) values ('$name', '$phone' ,'$role')";
    $runQuery = mysqli_query($conn , $query);
        if($runQuery){
            $_SESSION['success']="your account created successfuly ";
            header("location:../ownerlogin.php");
        }else {
            $_SESSION['errors'] = "error while insert";
            header("location:../workerregister.php");
        }
}else{
    $_SESSION['errors'] = $errors;
    $_SESSION['name'] = $name;
    $_SESSION['phone'] = $phone;
    header("location:../workerregister.php");
}
