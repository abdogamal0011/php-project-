<?php 
require_once '../inc/connection.php';

if( isset($_SESSION['user_id']))
  {


$uname = htmlspecialchars(trim($_POST['uname']));
$errors=[];


}
//check
$query = "select * from tblowner where uname='$uname'";
$runQuery = mysqli_query($conn , $query);
if(mysqli_num_rows($runQuery) ==1  ){
    $post= mysqli_fetch_assoc($runQuery);
    $_SESSION['Forget']=$post['uname'];
    header("location:../confiremPassword.php");
}
  else{
      $_SESSION['errors'] = ["please choose corect operation "];
    header("location:../checkPasswordowner.php"); 
  }


