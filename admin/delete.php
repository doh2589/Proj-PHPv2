<?php
require_once('connect.php');
if(isset($_GET['del'])){
    $delete_id = $_GET['del'];
    $delete_query = "DELETE FROM posts WHERE post_id = '$delete_id' ";
    if (mysqli_query($conn, $delete_query)){
        echo "<script>alert('ลบสำเร็จ')</script>";
        header("location: view_posts.php");
    }
}

?>