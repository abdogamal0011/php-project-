<?php

require_once "../inc/connection.php";

if (isset($_POST['submit'])) {
    $user_id = $_SESSION['user_id'];
    $name = htmlspecialchars(trim($_POST['name']));
    $body = htmlspecialchars(trim($_POST['description']));
    $cost=htmlspecialchars(trim($_POST['cost']));
    //validation

    $errors = [];
    //name
    if (empty($name)) {
        $errors[] = "name is required";
    } elseif (is_numeric($name)) {
        $errors = "name must be string ";
    }
    //body
    if (empty($body)) {
        $errors[] = "body is required";
    } elseif (is_numeric($body)) {
        $errors[] = "body must be string ";
    }
    //cost
    if (empty($name)) {
        $errors[] = "name is required";
    } 
   

    if (empty($errors)) {
        if (isset($_SESSION['user_id'])) {
            $id = $_SESSION['user_id'];
            $query = "select * from tblowner where fid=$id";
            $runQuery = mysqli_query($conn, $query);
            if (mysqli_num_rows($runQuery) == 1) {
                $post = mysqli_fetch_assoc($runQuery);
                if ($post['role'] == 'farmOnwer') {
                       $query = "insert into tblservices (`name`,`description`,`cost`,`id_owner`)
    values('$name' , '$body' ,'$cost' ,'$user_id' )";
        $runQuery = mysqli_query($conn, $query);
        header("location:../../../admin/view/viewAllService.php");

                }
            }
            }

        $query = "insert into tblservices (`name`,`description`,`cost`,`user_id`)
    values('$name' , '$body' ,'$cost' ,'$user_id' )";
        $runQuery = mysqli_query($conn, $query);
        header("location:../../../admin/view/viewAllService.php");

    } else {
        $_SESSION['errors'] = $errors;
        header("location:../../../viewAllService.php");
    }
} else {
    $_SESSION['errors'] = $errors;
    $_SESSION['name'] = $name;
    $_SESSION['description'] = $body;
    $_SESSION['cost'] = $cost;
    header("location:../../../formService.php");
}
