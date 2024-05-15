<?php 
require_once '../inc/connection.php';

if(isset($_SESSION['user_id'])){


//catch id , query check,  query delete 


    $id = (int) $_GET['id'];
    
    $query = "select *  from tblservices where id =$id";
    $runQuery = mysqli_query($conn , $query);
    if(mysqli_num_rows($runQuery) ==1){
        $post = mysqli_fetch_assoc($runQuery);

        $query = "delete from tblservices where id=$id";
        $runQuery =mysqli_query($conn , $query);
        if($runQuery){
            $_SESSION['success'] = "Service deleted successfuly";
        header("location:../../../admin/view/viewAllService.php");
        }else{
            $_SESSION['errors'] = ["error while deleted"];
    header("location:../../../admin/view/AddService.php");
        }
    }else{
        $_SESSION['errors']=["Service not founded "];
        header("location:../../../admin/view/AddService.php");
    }

}

else{
      header("location:../../../../../ownerlogin.php"); 
}




