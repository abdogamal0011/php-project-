<?php
include "../view/header.php";
include "body.php";
include "../view/navbar.php";
 require_once "inc/connection.php"; ?>
<?php 
      if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "select * from tblservices where tblservices.id=$id";
        $runQuery = mysqli_query($conn , $query);
        if(mysqli_num_rows($runQuery) ==1  ){
          $post= mysqli_fetch_assoc($runQuery);
        }else{
          $_SESSION['errors'] = ["service not founded"];
          header("location:../../../admin/view/AddService.php");
        }
      }else{
        $_SESSION['errors'] = ["service not founded"];
        header("location:../../../admin/view/AddService.php");
      }
      ?>

      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
            <!-- <?php 
              require_once 'inc/error.php';
              ?> -->
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Add Service</h3>

             <form method="POST" action="handle/update.php?id=<?php echo $id ?>" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php  echo $post['name'] ?>">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <textarea class="form-control" id="description" name="description" rows="5"><?php  echo $post['description'] ?></textarea>
    </div>
    <div class="mb-3">
        <label for="cost" class="form-label">cost</label>
        <input type="number" class="form-control" id="cost" name="cost" value="<?php  echo $post['cost'] ?>">
    </div>
    <!-- <img src="uploads/<?php echo $post['image'] ?>" alt="" width="100px" srcset=""> -->
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <a  class="btn btn-warning" href="AddService.php">cansel</a>
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