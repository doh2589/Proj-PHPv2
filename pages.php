<?php 
require_once('admin/connect.php');
require_once('_inc/header.php'); //Header
?>
<body>
<?php
require_once('_inc/nav.php'); //Navbar
?>  
        <br>
        <?php
                if(isset($_GET['id'])){
                    $page_id = $_GET['id'];
                    $select_posts = "SELECT * FROM posts WHERE post_id = '$page_id'";
                    $run_posts = @mysqli_query($conn, $select_posts);
                    while($row = @mysqli_fetch_array($run_posts)){
                        $post_id = $row['post_id'];
                        $post_date = $row['post_date'];
                        $post_author = $row['post_author'];
                        $post_title = $row['post_title'];
                        $post_image = $row['post_image'];
                        $post_content = $row['post_content'];
                    
            ?>
<center>
<div class="container">

    <div class="card w-75 shadow p-3 mb-5 bg-white rounded" >
    <h5 class="card-header"><b><?php echo $post_title; ?></b></h5>
    <img src="img/<?php echo $post_image; ?>" class="card-img-top" alt="..." width="1500" height="600">
    <div class="card-body">
    <p> โพสเมื่อ <strong><?php echo $post_date; ?></strong> </p>
        <p class="card-text"><?php echo $post_content ?></p>
        <h5>ราคา <strong class="badge badge-danger"><?php echo $post_author; ?></strong> บาท</h5>
        <br><a class="btn btn-success" href="buyshop.php?page=payinfo" role="button">สั่งซื้อ</a> <a class="btn btn-info" href="shop.php?page=shopping" role="button">กลับหน้าแรก</a>
    </div>
    </div>
</div></centter>
<?php
                    }
                }
                ?>
        

<?php
require_once('_inc/footer.php');
?>
</body>
</html>