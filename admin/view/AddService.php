<?php

include "../view/header.php";
include "body.php";
include "../view/navbar.php";
?>


      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper  d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">

              <div class="card-body px-5 py-5">
                <h2 class="card-title text-center ">Service</h2>
               <div class="d-flex justify-content-between align-items-center w-100">
                <a href="formService.php" class="btn p-2 btn-primary">Add Service</a>
                <a href="viewAllService.php" class="btn p-2 btn-warning">view Service</a>
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

<?php 
include "../view/footer.php";
 ?>