
<?php
include "../view/header.php";
include "body.php";
include "../view/navbar.php";
?>

<div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper  d-flex align-items-center auth login-bg">
            <div class="card col-9 mx-auto">
                        <?php 
                            $id = $_SESSION['user_id'] ;
                            
                            $query = "select * from tblowner where fid=$id";
                            $runQuery  = mysqli_query($conn, $query);
                            if(mysqli_num_rows($runQuery) ==1){
                                $post = mysqli_fetch_assoc($runQuery);
                            
                            }
                        ?>
              <div class="card-body px-5 py-5">
                <h2 class="card-title text-center ">  user name: <b class="text-danger"> <?php echo $post['uname'] ?></b></h2>
                <h2 class="card-title text-center ">full name : <b class="text-danger"> <?php echo $post['fname'] ?></b></h2>
                <h2 class="card-title text-center ">Email: <b class="text-danger"> <?php echo $post['Email'] ?></b></h2>
                <h2 class="card-title text-center ">farm siza: <b class="text-danger"> <?php echo $post['fsize'] ?></b></h2>
               <div class="d-flex justify-content-center align-items-center w-100">
                <a href="editeProfialOwner.php" class="btn p-3 btn-primary">Edite</a>
                
               </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>