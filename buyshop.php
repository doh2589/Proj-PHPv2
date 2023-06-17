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
            width:500px;
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
<img src="./img/buy.png"width="100" height="100">
    <form action="linetoke.php" method="post">
        <input name="ID" placeholder='ID (สินค้าที่จะสั้งซื้อ)' type='text'>
        <br>
        <input name="NameShop" placeholder='ชื่อลูกค้า' type='text'>
        <br>
        <input name="ที่อยู่" placeholder='ที่อยู่ลูกค้า' type='text'>
        <br>
        <input name="phone" placeholder='เบอร์มือถือลูกค้า(จำเป็น)' type='text'>
        <br>
        <input name="Knp" placeholder='ขนาดป้าย' type='text'>
        <br>
        <input name="MN" placeholder='รายละเอียดเพิ่มเติม(จำเป็น)' type='text'>
        <br>
        <input class='send' name="submit" type='submit' value='สั้งซื้อ'>
    </form>
<center>
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php
require_once('_inc/footer.php');
?>
</body>
</html>