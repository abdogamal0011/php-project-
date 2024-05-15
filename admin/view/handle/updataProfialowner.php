<?php 
require_once '../inc/connection.php';

if( isset($_SESSION['user_id']))
  {

$id = (int) $_GET['id'];
$title = htmlspecialchars(trim($_POST['fname']));
$email = htmlspecialchars(trim($_POST['email']));
$uname = htmlspecialchars(trim($_POST['uname']));
$fsiza = htmlspecialchars(trim($_POST['fsiza']));
$errors=[];


}
//check
$query = "select * from tblowner where fid=$id";
$runQuery = mysqli_query($conn , $query);
if(mysqli_num_rows($runQuery) ==1  ){
    $post= mysqli_fetch_assoc($runQuery);

    //update

    if(empty($errors)){
        $query = "update tblowner set `uname` = '$uname' , `Email` = '$email' , `fname` = '$title'  , `fsize`='$fsiza'  where fid=$id";
        $runQuery = mysqli_query($conn, $query);
        header("location:../../../admin/view/profialOwner.php");

       
    }else{
        $_SESSION['errors']=$errors;
       
        header("location:../editeProfial.php");
    }

}
  else{
      $_SESSION['errors'] = ["please choose corect operation "];
    header("location:../../../admin/view/AddService.php"); 
  }


