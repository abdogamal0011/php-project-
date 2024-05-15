<?php require_once 'inc/connection.php' ?>


<?php
include "../view/header.php";
include "body.php";
include "../view/navbar.php";
?>

      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card bg-light w-100 text-black ">


            <?php

if(isset($_GET['page'])){
  $page =abs($_GET['page']);
}
else{
  $page = 1 ; 
}

$limit=5;
$offset = ($page - 1)*$limit;


    //numberOfPages
$query = "select count('id') as total from tblservices";
$runQuery = mysqli_query($conn , $query);
$result = mysqli_fetch_assoc($runQuery);
$total = $result['total'];
$numberOfPages =ceil( $total / $limit);

if( $page > $numberOfPages)
{
header("location:{$_SERVER['PHP_SELF']}?page=$numberOfPages");
}elseif($page < 1 ){
header("location:{$_SERVER['PHP_SELF']}?page=1");
}

$query = "select id,  name ,description  , cost  from tblservices order By id limit $limit offset $offset";
$runQuery = mysqli_query($conn, $query);
if (mysqli_num_rows($runQuery)) {

  $posts = mysqli_fetch_all($runQuery, MYSQLI_ASSOC);
} else {
  $msg = "no post founded";
}
?>



<?php
if (!empty($posts)) :
?>
  <div class="latest-products">

    <div class="container">
      <?php
      require_once './inc/succes.php';
      require_once './inc/error.php';
      ?>

</head>
<body>
<div class="col-md-12">

<h2>Services</h2>

<table class="table table-hover text-black  ">
    
  <tr>
  <th>Name</th>
  <th>Description</th>
  <th>Cost</th>
  <th>Delete</th>
  <th>Edite</th>
  </tr>
  <?php
        foreach ($posts as $post) :
        ?>
  <tr>
  <td><?php echo $post['name']?></td>
  <td><?php echo $post['description']?></td>
  <td><?php echo $post['cost']?></td>
  <td>
    <a href="handle/deletePost.php?id=<?php echo $post['id']?>" type="submit"  class="btn btn-danger" onclick="alert('are you sure !!')">delete</a>
</td>
  <td>
<a href="handle/update.php?id=<?php echo $post['id']?>" type="submit" name="submit" class="btn btn-danger" onclick="alert('are you sure !!')">edit</a>
</td>
  </tr>
  <?php endforeach; ?>
</table>
<div class="d-flex justify-content-center align-items-center mt-5">

  <nav aria-label="Page navigation example ">
    <ul class="pagination">
      <li class="page-item <?php if($page == 1) echo "disabled " ?>">
        <a class="page-link text-danger " href="<?php echo $_SERVER['PHP_SELF']."?page=".$page-1  ?>" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li class="page-item "><a class="page-link text-danger" ><?php  echo $page ?></a></li>
      
      <li class="page-item <?php if($page == $numberOfPages) echo "disabled " ?>">
        <a class="page-link text-danger" href="<?php echo $_SERVER['PHP_SELF']."?page=".$page+1  ?>" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>
</div>
</div>
</div>
<?php
endif;
?>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    </div>

