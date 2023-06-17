<?php 
require_once "connect.php";
session_start();
if(!isset($_SESSION['username'])){
    header('location: login.php');
} else {



?>
<?php
require_once('_incadmin/header.php');
?>


<body>

  <div class="d-flex" id="wrapper">
  
     <!-- /#sidebar-wrapper -->
     <?php 
      require_once('_incadmin/sidebar.php');
      ?>
    <!-- Page Content -->
    <div id="page-content-wrapper">

      <?php 
      require_once('_incadmin/nav.php');
      ?>

      <div class="container-fluid">

      <table class="table table-striped">
  <thead>
    <tr class="text-center">
      <th scope="col">#</th>
      <th scope="col">วันที่</th>
      <th scope="col">ราคา</th>
      <th scope="col">ชื่อสินค้า</th>
      <th scope="col">รูป</th>
      <th scope="col">คำอธิบาย</th>
      <th scope="col">ลบสินค้า</th>
      <th scope="col">แก้ไข</th>
    </tr>
  </thead>
                            <?php
                            $select_post = "SELECT * FROM posts ORDER BY 1 DESC";
                            $query_post = mysqli_query($conn, $select_post);
                            while($row = mysqli_fetch_array($query_post)){
                                $post_id = $row['post_id'];
                                $post_date = $row['post_date'];
                                $post_author = $row['post_author'];
                                $post_title = $row['post_title'];
                                $post_image = $row['post_image'];
                                $post_content = substr($row['post_content'],0,100);
                                ?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?php echo $post_id; ?></th>
      <td><?php echo $post_date; ?></td>
      <td><?php echo $post_author; ?></td>
      <td><?php echo $post_title; ?></td>
      <td><img width="90" height="90" src="../img/<?php echo $post_image; ?>"></td>
      <td><?php echo $post_content; ?></td>
      <td><a class="btn btn-outline-danger btn-sm" href="delete.php?del=<?php echo $post_id; ?>" role="button"><i class="far fa-trash-alt"></i> ลบ</a></td>
      <td><a class="btn btn-outline-info btn-sm" href="edit_post.php?edit=<?php echo $post_id; ?>" role="button"><i class="far fa-edit"></i> แก้ไข</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>



      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
  
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
<?php } ?>