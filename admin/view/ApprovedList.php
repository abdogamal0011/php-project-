<?php 
require_once 'inc/connection.php';
?>
<?php
include "../view/header.php";
include "body.php";
include "../view/navbar.php";
?>
<?php 
if( isset($_SESSION['user_id']))
  {
    $query = 'select * FROM tblservices WHERE status="Approved"';
    $runQuery = mysqli_query($conn , $query);
    if (mysqli_num_rows($runQuery)) {
        $posts = mysqli_fetch_all($runQuery, MYSQLI_ASSOC);
      } else {
        $msg = "no post founded";
      }
    }

  ?>

<table class="table table-hover text-black w-75  m-auto bg-light">
    
    <tr>
    <th>Name</th>
    <th>description</th>
    <th>cost</th>
    <th>status</th>
    </tr>
    <?php
          foreach ($posts as $post) :
          ?>
    <tr>
    <td><?php echo $post['name']?></td>
    <td><?php echo $post['description']?></td>
    <td><?php echo $post['cost']?></td>
    <td><?php echo $post['status']?></td>
    </tr>
    <?php endforeach; ?>
  </table>


