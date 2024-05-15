<?php 
require_once '../inc/connection.php';

if( isset($_SESSION['user_id']))
  {
$id = (int) $_GET['id'];
$errors=[];
}
//check
$query = "select * from tblservices where id=$id";
$runQuery = mysqli_query($conn , $query);
if(mysqli_num_rows($runQuery) ==1  ){
    $post= mysqli_fetch_assoc($runQuery);

    //update

    if(empty($errors)){
        $query = "update tblservices set `status`='Approved' where id=$id";
        $runQuery = mysqli_query($conn, $query);
        header("location:../../../admin/view/ApprovedList.php");

       
    }else{
    
        header("location:../checkedRequest.php");
    }

}
  else{
      $_SESSION['errors'] = ["please choose corect operation "];
    header("location:../checkedRequest.php"); 
  }


