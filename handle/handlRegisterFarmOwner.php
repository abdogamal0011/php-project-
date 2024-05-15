<?php 
require_once '../inc/connection.php';

if(! isset($_POST['submit'])){

    header("location:../register.php");
}
$fname = trim(htmlspecialchars($_POST['fname']));
$uname = trim(htmlspecialchars($_POST['uname']));
$fSize = trim(htmlspecialchars($_POST['fsiza']));
$email = trim(htmlspecialchars($_POST['email']));
$password = trim(htmlspecialchars($_POST['password']));
$phone = trim(htmlspecialchars($_POST['phone']));
$question = trim(htmlspecialchars($_POST['question']));
$answer = trim(htmlspecialchars($_POST['answer']));
$role = trim(htmlspecialchars($_POST['role']));


//validation
$errors = [];
//name(required , string , max=50)
    if(empty($fname)){
        $errors[] = "fname is required ";
    }elseif (is_numeric($fname)){
        $errors[] = "fname must be string ";

    }elseif(strlen($fname) > 50){
        $errors[] = "fname must be less than 50 char ";
    }

//email(required , email , )
if(empty($email)){
    $errors[] = "email is required ";
}elseif (! filter_var($email , FILTER_VALIDATE_EMAIL)){
    $errors[] = "email invalied  ";
}
//password(required  , min >=50)
if(empty($password)){
    $errors[] = "password is required ";
}elseif (strlen($password) < 6  ){
    $errors[] = "password must be more than 6 char  ";
}
//phone(inter  , 15)
if(empty($phone)){
    $errors[] = "phone is required ";
}elseif (! is_string($phone)){
    $errors[] = "phone not correct  ";

}elseif(strlen($phone) <11 ){
    $errors[] = "phone invalid  ";
}



if(empty($errors)){
    $query = "insert into tblowner(`fname` , `uname` , `fsize` , `pass` , `Email` , `sq` ,`sa` , `role`) values ('$fname', '$uname','$fSize','$password' ,'$email' , '$question','$answer' , '$role')";
    $runQuery = mysqli_query($conn , $query);
        if($runQuery){
            $_SESSION['success']="your account created successfuly ";
            header("location:../ownerlogin.php");
        }else {
            $_SESSION['errors'] = "error while insert";
            header("location:../FarmOnerregister.php");
        }
}else{
    $_SESSION['errors'] = $errors;
    $_SESSION['fname'] = $fname;
    $_SESSION['uname'] = $uname;
    $_SESSION['fsiza'] = $fSize;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['phone'] = $phone;
    $_SESSION['answer'] = $answer;
    $_SESSION['phone'] = $phone;
    header("location:../FarmOnerregister.php");
}
