<?php 
session_start();
if(!isset($_SESSION['username'])){
    header('location: login.php');
}

require_once('../connection2.php');

if (isset($_REQUEST['delete_id'])) {
    $id = $_REQUEST['delete_id'];

    $select_stmt = $db->prepare('SELECT * FROM img WHERE id = :id');
    $select_stmt->bindParam(':id', $id);
    $select_stmt->execute();
    $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
    unlink("upload/".$row['image']); // unlin functoin permanently remove your file

    // delete an original record from db
    $delete_stmt = $db->prepare('DELETE FROM img WHERE id = :id');
    $delete_stmt->bindParam(':id', $id);
    $delete_stmt->execute();
}



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
      <th scope="col">รูป</th>
      <th scope="col">คำอธิบาย</th>
      <th scope="col">ผ่าน</th>
      <th scope="col">ไม่ผ่าน</th>
      <th scope="col">สถานะ</th>
      
    </tr>
  </thead>
  <tbody>
                <?php 
                    $select_stmt = $db->prepare('SELECT * FROM img'); 
                    $select_stmt->execute();

                    while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>                 
                        <td><img src="../upload/<?php echo $row['image']; ?>" width="100px" height="100px" alt=""></td>                        
                        <td><a href="edit.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">ผ่าน</a></td>                        
                        <td><a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">ไม่ผ่าน</a></td>   
                        </td>  
                         
                         
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
 
</body>

</html>