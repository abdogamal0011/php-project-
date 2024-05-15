<?php 
require_once '../inc/connection.php';

if( isset($_SESSION['user_id']))
  {

$id = (int) $_GET['id'];
$title = htmlspecialchars(trim($_POST['name']));
$body = htmlspecialchars(trim($_POST['description']));
$cost = htmlspecialchars(trim($_POST['cost']));
$errors=[];

if(empty($title)){
    $errors[]= "title is required";
}elseif(is_numeric($title)){
    $errors = "title must be string ";
}


//body
if(empty($body)){
    $errors[]= "body is required";
}elseif(is_numeric($body)){
    $errors []= "body must be string ";
}
}
//check
$query = "select * from tblservices where id=$id";
$runQuery = mysqli_query($conn , $query);
if(mysqli_num_rows($runQuery) ==1  ){
    $post= mysqli_fetch_assoc($runQuery);

    //update

    if(empty($errors)){
        $query = "update tblservices set `name` = '$title' , `description` = '$body' , `cost` = '$cost' where id=$id";
        $runQuery = mysqli_query($conn, $query);
        header("location:../../../admin/view/viewAllService.php");

       
    }else{
        $_SESSION['errors']=$errors;
        $_SESSION['name']=$title;
        $_SESSION['cost']=$cost;
        $_SESSION['description']=$body;
        header("location:../editPost.php?id=$id");
    }

}
  else{
      $_SESSION['errors'] = ["please choose corect operation "];
    header("location:../../../admin/view/AddService.php"); 
  }


