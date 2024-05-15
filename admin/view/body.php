
<?php 
require_once 'inc/connection.php';
?>
<body class="">
<div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo text-white" href="index.html">bayadere</a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
      
        
          <li class="nav-item menu-items">
            <a class="nav-link" href="AddService.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">manage farm Service </span>
            </a>
          </li>
          <a class="nav-link"  href="checkedRequest.php" aria-expanded="false" aria-controls="ui-basic">
          <li class="nav-item menu-items">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Check Service Request</span>
            </a>
          </li>
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">View form owner list </span>
            </a>
          </li> -->
          <li class="nav-item menu-items">
            <a class="nav-link" href="WorkerList.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">View worker list</span>
            </a>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="ApprovedList.php">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">View approve  list</span>
            </a>
          </li>
          <?php
                if (isset($_SESSION['user_id'])) {
                    $id = $_SESSION['user_id'];
                    $query = "select * from tblowner where fid=$id";
                    $runQuery = mysqli_query($conn, $query);
                    if (mysqli_num_rows($runQuery) == 1) {
                        $post = mysqli_fetch_assoc($runQuery);
                        if ($post['role'] == 'farmOnwer') {
                ?>

          <li class="nav-item menu-items">
            <a class="nav-link" href="profialOwner.php">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">profial</span>
            </a>
          </li>
          <?php }else{?>
          <li class="nav-item menu-items">
            <a class="nav-link" href="profial.php">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">profial</span>
            </a>
          </li>
          <?php }}}?>
          <?php 
          
                if(isset($_SESSION['user_id'])):
                ?>
          <li class="nav-item menu-items">
            <a class="nav-link" href="handle/logout.php">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">logout</span>
            </a>
          </li>
          <?php 
              else:
              ?>
              <li class="nav-item menu-items">
            <a class="nav-link" href="../../ownerlogin.php">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">login</span>
            </a>
          </li>
      
          <?php endif ;?>
          <?php
                if (isset($_SESSION['user_id'])) {
                    $id = $_SESSION['user_id'];
                    $query = "select * from tblowner where fid=$id";
                    $runQuery = mysqli_query($conn, $query);
                    if (mysqli_num_rows($runQuery) == 1) {
                        $post = mysqli_fetch_assoc($runQuery);
                        if ($post['role'] == 'farmOnwer') {
                ?>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../workerchangepass.php">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">change Password</span>
            </a>
          </li>
        <?php }}}?>
        
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">change password</span>
            </a>
          </li> -->
         
        </ul>
      </nav>
</body>

