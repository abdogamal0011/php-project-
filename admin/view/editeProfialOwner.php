<?php
include "../view/header.php";
include "body.php";
include "../view/navbar.php";
 require_once "inc/connection.php"; ?>
<?php 
      if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];
        $query = "select * from tblowner where fid=$id";
        $runQuery = mysqli_query($conn , $query);
        if(mysqli_num_rows($runQuery) ==1  ){
          $post= mysqli_fetch_assoc($runQuery);
        }else{
          $_SESSION['errors'] = [" not founded"];
          header("location:../../../admin/view/profial.php");
        }
      }else{
        $_SESSION['errors'] = [" not founded"];
        header("location:../../../admin/view/profial.php");
      }
      ?>

      <div class="container page-body-wrapper full-page-wrapper">
        <div class="row w-100">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-9 mx-auto">
            <?php 
              require_once 'inc/error.php';
              ?>
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Updata Profial</h3>

             <form method="POST" action="handle/updataProfialowner.php?id=<?php echo $id ?>" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="text" class="form-control" id="name" name="fname" value="<?php  echo $post['fname'] ?>">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="text" class="form-control" id="name" name="uname" value="<?php  echo $post['uname'] ?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">email</label>
        <textarea class="form-control" id="email" name="email" rows="5"><?php  echo $post['Email'] ?></textarea>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">phone</label>
        <input type="tel" class="form-control" id="phone" name="fsiza" value="<?php  echo $post['fsize'] ?>">
    </div>
    <!-- <img src="uploads/<?php echo $post['image'] ?>" alt="" width="100px" srcset=""> -->
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <a  class="btn btn-warning" href="profial.php">cansel</a>
  </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

<?php 
include "../view/footer.php";
 ?>