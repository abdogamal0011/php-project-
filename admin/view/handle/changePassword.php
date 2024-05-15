<?php 
require_once '../inc/connection.php';

if( isset($_SESSION['user_id']))
  {

$id = $_SESSION['user_id'];
$title = htmlspecialchars(trim($_POST['currentPassword']));
$newpassword = htmlspecialchars(trim($_POST['newPassword']));
$confirmpassword = htmlspecialchars(trim($_POST['confirmPassword']));
$errors=[];


}
//check
$query = "select * from tblowner where fid=$id";
$runQuery = mysqli_query($conn , $query);
if(mysqli_num_rows($runQuery) ==1  ){
    $post= mysqli_fetch_assoc($runQuery);

    //update

    if(empty($errors)){
        $query = "update tblowner set `pass` = '$newpassword'   where fid=$id";
        $runQuery = mysqli_query($conn, $query);
        header("location:../../../admin/index.php");

       
    }else{
        $_SESSION['errors']=$errors;
        $_SESSION['password']=$newpassword;
  
        header("location:../../workerchangepass.php");
    }

}
  else{
      $_SESSION['errors'] = ["please choose corect operation "];
    header("location:../../workerchangepass.php"); 
  }


