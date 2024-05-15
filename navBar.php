<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="images/logo2.png" alt="logo" />
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link " href="index.php">Home</a>
                </li>
                <?php
                require_once 'inc/connection.php';

                ?>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>

                <?php

                if (isset($_SESSION['user_id'])) {

                ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="handle/logout.php">logout</a>
                    </li>

                <?php
                } else {
                ?>
                <li class="nav-item dropdown">
                     <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Login
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="ownerlogin.php">Farm Owner</a>
                        <a class="dropdown-item" href="ownerloginAdmin.php">admin</a>
                              </div>
                  </li>                 
                  <li class="nav-item dropdown">
                     <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Register
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="FarmOnerregister.php">Farm Owner</a>
                        <a class="dropdown-item" href="workerregister.php">Worker</a>
                              </div>
                  </li>  
                   
                <?php } ?>

                   
                <?php
                if (isset($_SESSION['user_id'])) {
                    $id = $_SESSION['user_id'];
                    $query = "select * from user where id=$id";
                    $runQuery = mysqli_query($conn, $query);
                    if (mysqli_num_rows($runQuery) == 1) {
                        $post = mysqli_fetch_assoc($runQuery);
                        if ($post['role'] == 'admin') {
                ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="admin/index.php">Dashbord</a>
                            </li>
                <?php }
                    }
                } ?>
                <?php
                if (isset($_SESSION['user_id'])) {
                    $id = $_SESSION['user_id'];
                    $query = "select * from tblowner where fid=$id";
                    $runQuery = mysqli_query($conn, $query);
                    if (mysqli_num_rows($runQuery) == 1) {
                        $post = mysqli_fetch_assoc($runQuery);
                        if ($post['role'] == 'farmOnwer') {
                ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="admin/index.php">Dashbord</a>
                            </li>
                <?php }
                    }
                } ?>
                
                <!-- <li class="nav-item dropdown">
                     <a class="nav-link" href="workerregister.php"  >
                     Register
                     </a>
                  </li> -->

            </ul>
        </div>
    </div>
</nav>