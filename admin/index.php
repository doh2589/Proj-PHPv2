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
      <center>
                <h1>ยินดีต้อนรับ สู่ Admin ADsign</h1>
                <img width="640" height="360" src="https://media.discordapp.net/attachments/844252912879927366/881695875846533140/1630283056383.png?width=1440&height=574" alt="">
</center>
      </div>
    </div>

  </div>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>






</body>

</html>
