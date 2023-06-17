<?php 
    session_start();
    require_once "connect.php";
    if(!isset($_SESSION['username'])){
        header('location: login.php');

    }
    ?>
<?php
require_once('_incadmin/header.php');
?>

<body>
  <div class="d-flex" id="wrapper">

    <?php 
      require_once('_incadmin/sidebar.php');
      ?>

    <div id="page-content-wrapper">

      <?php 
      require_once('_incadmin/nav.php');
      ?>
      <div class="container-fluid mt-5">
<?php 
    require_once('connection.php');

    if (isset($_REQUEST['delete_id'])) {
        $id = $_REQUEST['delete_id'];

        $select_stmt = $db->prepare('SELECT * FROM tbl_file WHERE id = :id');
        $select_stmt->bindParam(':id', $id);
        $select_stmt->execute();
        $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
        unlink("./admin/upload/".$row['image']); // unlin functoin permanently remove your file

        // delete an original record from db
        $delete_stmt = $db->prepare('DELETE FROM tbl_file WHERE id = :id');
        $delete_stmt->bindParam(':id', $id);
        $delete_stmt->execute();
        
        header("Location: index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สลีปโอนเงิน</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>


    <div class="container text-center">

        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <td>เวลาโอน</td>  <td><p>รูป</p></td> <td>รายละเอียดเพิ่ม</td>  
                </tr>
            </thead>

            <tbody>
                <?php 
                    $select_stmt = $db->prepare('SELECT * FROM tbl_file'); 
                    $select_stmt->execute();

                    while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
           <td> </td>
                    <tr>
                    <td><?php echo $row['name']; ?></td>
                        <td><img src="upload/<?php echo $row['image']; ?>" width="500px" height="500px" alt=""><br><br><a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">ดําเนินการเสร็จ</a></td>
                        <td><?php echo $row['names']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <html>
<head>

</body>
</html>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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

</body>

</html>
