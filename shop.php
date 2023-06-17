<?php
if(@$_GET['page'] == 'shopping');
require_once('admin/connect.php');
require_once('_inc/header.php'); //Header
?>
<body>
<?php
require_once('_inc/nav.php'); //Navbar
?>


      <div class="col-lg-12 text-center mt-5">
        <h1>รายการสินค้า <span class="badge badge-danger">New</span></h1>
        <p class="lead">เราอัพเดทความใหม่ของป้ายอยู่เสมอ</p>
        <hr>
                <?php
                    $select_posts = "SELECT * FROM posts";
                    $run_posts = mysqli_query($conn, $select_posts);
                     while($row = mysqli_fetch_array($run_posts)) {

                        $post_id = $row['post_id'];
                        $post_date = $row['post_date'];
                        $post_author = $row['post_author'];
                        $post_title = $row['post_title'];
                        $post_image = $row['post_image'];
                        $post_content = substr($row['post_content'],0,130);
                ?>


        <center>
            <div class="card  w-50 mt-5 shadow-lg p-3 mb-5 bg-white rounded"  > 
            <h5><b><?php echo $post_title; ?></b> <span class="badge badge-danger">Hot!</span></h5>
            <img width="1800" height="700" class="card-img-top" src="img/<?php echo $post_image; ?>" alt="">
            <div class="card-body">
            <hr>
            <div class="container">
            <p><?php echo $post_content; ?><b>...<a href="pages.php?id=<?php echo $post_id; ?>">เพิ่มเติม</a></b></p>
            <h5><b>ราคา <strong class="badge badge-danger"><?php echo $post_author; ?></strong> บาท</b></h5>
            </div>
                <a href="pages.php?id=<?php echo $post_id; ?>" class="btn btn-info mt-2">รายละเอียด</a>
                <hr>
                
            </div>
            <p> โพสเมื่อ <strong class="badge badge-danger"><?php echo $post_date; ?></strong></p>
            </div>
            </center>       
                <?php 
				}
                ?>
        
      </div>
    </div>
  </div>
  <!-- /Page Content -->
  <div class="container">
    
  </div>





  <!-- Footer Content -->
<?php
  require_once('_inc/footer.php');
?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
