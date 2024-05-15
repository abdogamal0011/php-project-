<?php 
require_once '../inc/connection.php';

if( isset($_SESSION['user_id']))
  {

$id = (int) $_GET['id'];
$title = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$phone = htmlspecialchars(trim($_POST['phone']));
$errors=[];


}
//check
$query = "select * from user where id=$id";
$runQuery = mysqli_query($conn , $query);
if(mysqli_num_rows($runQuery) ==1  ){
    $post= mysqli_fetch_assoc($runQuery);

    //update

    if(empty($errors)){
        $query = "update user set `name` = '$title' , `email` = '$email' , `phone` = '$phone'   where id=$id";
        $runQuery = mysqli_query($conn, $query);
        header("location:../../../admin/view/profial.php");

       
    }else{
        $_SESSION['errors']=$errors;
        $_SESSION['name']=$title;
  
        $_SESSION['phone']=$phone;
    
        $_SESSION['email']=$email;
        header("location:../editeProfial.php");
    }

}
  else{
      $_SESSION['errors'] = ["please choose corect operation "];
    header("location:../../../admin/view/AddService.php"); 
  }


