<?php 
require_once '../inc/connection.php';

if (isset($_POST['submit']))
  {
$uname = htmlspecialchars(trim($_POST['uname']));
$newPassword = htmlspecialchars(trim($_POST['newPassword']));
$Confirempassword = htmlspecialchars(trim($_POST['Confirempassword']));
$errors=[];

//check
$query = "select pass from tblowner where uname='$uname'";
$runQuery = mysqli_query($conn , $query);
if(mysqli_num_rows($runQuery) ==1  ){
    $post= mysqli_fetch_assoc($runQuery);

    //update

    if(empty($errors)){
        $query = "update tblowner set `pass` = '$newPassword' where  uname='$uname'";
        $runQuery = mysqli_query($conn, $query);
        header("location:../ownerlogin.php");

       
    }else{
        $_SESSION['errors']=$errors;
  
        header("location:../ownerlogin.php");
    }

}
  else{
      $_SESSION['errors'] = ["please choose corect operation "];
    header("location:../ownerlogin.php"); 
  }

  }
