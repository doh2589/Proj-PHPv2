<?php 
require_once('admin/connect.php');
require_once('_inc/header.php'); //Header
?>
<body>
<?php
require_once('_inc/nav.php'); //Navbar
?>  
      <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input {
            border:1px solid #ccc;
            width:250px;
            height: 75px;
            padding:10px;
            margin:5px 15px;
            border-radius:5px;
        }
        .send {
            width:220px;
        }
    </style>
</head>
<center>
<?php 

require_once('connection.php');

if (isset($_REQUEST['btn_insert'])) {
    try {
        $name = $_REQUEST['txt_name'];
        $names = $_REQUEST['txt_names'];
        $image_file = $_FILES['txt_file']['name'];
        $type = $_FILES['txt_file']['type'];
        $size = $_FILES['txt_file']['size'];
        $temp = $_FILES['txt_file']['tmp_name'];

        $path = "./admin/upload/" . $image_file; // set upload folder path

        if (empty($name)) {
            $errorMsg = "Please Enter name";
        } else if (empty($image_file)) {
            $errorMsg = "please Select Image";
        } else if ($type == "image/jpg" || $type == 'image/jpeg' || $type == "image/png" || $type == "image/gif") {
            if (!file_exists($path)) { // check file not exist in your upload folder path
                if ($size < 5000000) { // check file size 5MB
                    move_uploaded_file($temp, './admin/upload/'.$image_file); // move upload file temperory directory to your upload folder
                } else {
                    $errorMsg = "Your file too large please upload 5MB size"; // error message file size larger than 5mb
                }
            } else {
                $errorMsg = "อัพโหลดไม่สำเร็จ..."; // error message file not exists your upload folder path
            }
        } else {
            $errorMsg = "Upload JPG, JPEG, PNG & GIF file formate...";
        }

        if (!isset($errorMsg)) {
            $insert_stmt = $db->prepare('INSERT INTO tbl_file(name,image,names) VALUES (:fname,:fimage,:fnames)');
            $insert_stmt->bindParam(':fname', $name);
            $insert_stmt->bindParam(':fnames', $names);
            $insert_stmt->bindParam(':fimage', $image_file);

            if ($insert_stmt->execute()) {
                $insertMsg = "อัพโหลดสำเร็จ...";
                header('refresh:2;buysale.php');
            }
        }

    } catch(PDOException $e) {
        $e->getMessage();
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Page</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<div class="container text-center">
    <h1>อัพโหลดสลีปโอนเงิน</h1>
    <?php 
        if(isset($errorMsg)) {
    ?>
        <div class="alert alert-danger">
            <strong><?php echo $errorMsg; ?></strong>
        </div>
    <?php } ?>

    <?php 
        if(isset($insertMsg)) {
    ?>
        <div class="alert alert-success">
            <strong><?php echo $insertMsg; ?></strong>
        </div>
    <?php } ?>
    <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
        <div class="row">
        <label for="name" class="col-sm-3 control-label"> </label>
        
        <div class="col-sm-9">
            <input type="text" name="txt_name" class="form-control" placeholder="เวลาที่แจ้งปัญหา">
            <input type="text" name="txt_names" class="form-control" placeholder="รายระเอียดเพิ่มเติม">
    
        </div>
        
        </div>
    </div>
    <center>
    <div class="form-group">
        <div class="row">
        <label for="name" class="col-sm-3 control-label"></label>
        <div class="col-sm-9">
            <input type="file" name="txt_file" class="form-control">
            
        </div>
        </div>
        <div class="form-group">
        <div class="col-sm-12">
            <br>
            <input type="submit" name="btn_insert" class="btn btn-success" value="อัพโหลด">
            <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
    </div>
    </div>
</form>
</div>
    
<center>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
require_once('_inc/footer.php');
?>
</body>
</html>