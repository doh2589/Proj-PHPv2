<?php 
    session_start();
    require_once "connect.php";
    if(!isset($_SESSION['username'])){
        header('location: login.php');

    }
    if(isset($_POST['submit'])){
        $post_title = $_POST['title'];
        $post_date = date('y-m-d');
        $post_author = $_POST['author'];
        $post_keywords = $_POST['keywords'];
        $post_content = $_POST['content'];
        $post_image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        move_uploaded_file($image_tmp, "../img/$post_image");
        $insert_query = "INSERT INTO posts(post_title, post_date, post_author, post_image, post_keywords, post_content)
                        VALUES ('$post_title', '$post_date', '$post_author', '$post_image', '$post_keywords', '$post_content')";
        if(mysqli_query($conn,$insert_query)){
            echo "<script>alert('ลงข้อมูลสำเร็จ');</script>";
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
                <h5 class="card-title "><i class="fas fa-plus-square"></i> เพิ่มสินค้า</h5>

            <form action="insert_post.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control mt-1" name="title" placeholder="ชื่ออสินค้า">
                    <input type="text" class="form-control mt-1" name="author" placeholder="ราคาสินค้า" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1"><i class="fas fa-file-upload"></i> อัพโหลดภาพ</label>
                    <input type="file" class="form-control-file" name="image">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"><i class="fab fa-readme"></i> รายละเอียด</label>
                    <textarea class="form-control" name="content" cols="50" rows="15"></textarea>
                </div>
                
                <input type="submit" class="btn btn-primary"name="submit" value="บันทึก">
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
