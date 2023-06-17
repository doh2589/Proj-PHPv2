<?php
    require_once "connect.php";
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: login.php');
    } 

  if(isset($_GET['edit'])){
        $edit_id = $_GET['edit'];

        $edit_query = "SELECT * FROM posts WHERE post_id = '$edit_id'";

        $run_edit = mysqli_query($conn, $edit_query);

        while($edit_row = mysqli_fetch_array($run_edit)){
            $post_id = $edit_row['post_id'];
            $post_title = $edit_row['post_title'];
            $post_author = $edit_row['post_author'];
            $post_date = date('y-m-d');
            $post_keywords = $edit_row['post_keywords'];
            $post_image = $edit_row['post_image'];
            $post_content = $edit_row['post_content'];
        }
    }

    if(isset($_POST['submit'])){
        $update_id = $_GET['edit_form'];
        $post_title = $_POST['title'];
        $post_date = date('y-m-d');
        $post_author = $_POST['author'];
        $post_keywords = $_POST['keywords'];
        $post_content = $_POST['content'];
        $post_image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        move_uploaded_file($image_tmp,"../img/$post_image");

        $update_query = "UPDATE posts SET post_title = '$post_title', post_date = '$post_date', post_author = '$post_author',
                            post_image = '$post_image', post_keywords = '$post_keywords', post_content = '$post_content' WHERE post_id = '$update_id' ";

        if(mysqli_query($conn, $update_query)){
            echo "<script>alert('อัพเดทเรียบร้อย');</script>";
            header("location: view_posts.php");
        }else{
            echo "<script>alert('มีบางอย่างผิดพลาด');</script>";
        }
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
      <center>
          <div class="container">
          <div class="card w-75 mt-5">
            <div class="card-body">
                <h5 class="card-title ">แก้ไขสินค้า</h5>

            <form action="edit_post.php?edit_form=<?php echo $post_id; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control mt-1" name="title" value="<?php echo $post_title;?>">
                    <input type="text" class="form-control mt-1" name="author" value="<?php echo $post_author;?>" >
                </div>
                <div class="form-group">
                    <center><label for="exampleFormControlFile1">อัพโหลดภาพ กรุณาเลือกภาพใหม่ไม่อยากนั้นจะไม่แสดง</label></center>
                    <input type="file" class="form-control-file" name="image"><img width="100" height="100" src="../img/<?php echo $post_image; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">รายละเอียด</label>
                    <textarea class="form-control" name="content" cols="50" rows="15" ><?php echo $post_content;?>"</textarea> 
                </div>
                
                <input type="submit" class="btn btn-primary"name="submit" value="อัพเดท">
            </form>

            </div>
            </div>
        </div>

</center>
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
